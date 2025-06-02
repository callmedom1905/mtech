<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response([
            'status' => true,
            'message' => 'User list',
            'data' => $user
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'role' => 'required|integer|in:0,1', // 0: user, 1: admin
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();

            return response([
                'status' => true,
                'message' => 'User created successfully',
                'data' => $user
            ], 201);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => 'Failed to create user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = User::findOrFail($id);
            $request->validate([
                // 'name' => 'required|string|max:255',
                // 'email' => 'required|email|unique:users,email,' . $id,
                // 'password' => 'nullable|string|min:8|confirmed',
                'role' => 'required|in:user,admin', // 0: user, 1: admin
            ]);

            // if ($request->has('name')) {
            //     $user->name = $request->name;
            // }
            // if ($request->has('email')) {
            //     $user->email = $request->email;
            // }
            // if ($request->filled('password')) {
            //     $user->password = Hash::make($request->password);
            // }
            if ($request->has('role')) {
                $user->role = $request->role;
            }
            $user->save();

            return response([
                'status' => true,
                'message' => 'User updated successfully',
                'data' => $user
            ], status: 200);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => 'Failed to update user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response([
                'status' => true,
                'message' => 'User deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => 'Failed to delete user',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
