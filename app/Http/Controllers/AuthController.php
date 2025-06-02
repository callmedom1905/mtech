<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function validateRegister(Request $request){
        $request->validate([
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|email|unique:users,email',
            'password' => 'required|bail',
            'role' => 'in:user,admin',
        ]);
    }

    public function register(){
        try {
            $this->validateRegister(request());
            $user = new User();
            $user->name = request('name');
            $user->email = request('email');
            $user->password = Hash::make(request('password'));
            $user->save();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response([
                'status' => true,
                'message' => 'User created successfully',
                'data' => [
                    'user' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer'
                ]
            ], 201);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => 'Failed to create user',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function validateLogin(Request $request){
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'required|bail',
        ]);
    }
    public function login(){
        try {
            $this->validateLogin(request());
            $user = User::where('email', request('email'))->first();
            if (!$user || !Hash::check(request('password'), $user->password)) {
                return response([
                    'status' => false,
                    'message' => 'Invalid credentials'
                ], 401);
            }
            $token = $user->createToken('auth_token')->plainTextToken;
            return response([
                'status' => true,
                'message' => 'Login successful',
                'data' => [
                    'user' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                ]
            ], 200);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => 'Failed to login',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function logout(){
       try {
        $user = auth()->user();
        if ($user) {
            $user->tokens()->delete();
            return response([
                'status' => true,
                'message' => 'Logout successful'
            ], 200);
        } else {
            return response([
                'status' => false,
                'message' => 'User not found'
            ], 404);
        }
       } catch (\Throwable $th) {
        return response([
            'status' => false,
            'message' => 'Failed to logout',
            'error' => $th->getMessage()
        ], 500);
       }
    }
}
