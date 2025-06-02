<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return response()->json([
            'success' => true,
            'message' => 'Category List',
            'data' => $category
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
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required|integer|in:0,1',
            ]);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            if (!$image->move(public_path('img'), $imageName)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to upload image'
                ], 500);
            }

            $category = new Category();
            $category->name = $request->name;
            $category->image = $imageName; // fix chỗ này
            $category->status = $request->status;
            $category->save();

            return response()->json([
                'success' => true,
                'message' => 'Category created successfully',
                'data' => $category
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $category = Category::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required|integer|in:0,1',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();

                if (!$image->move(public_path('img'), $imageName)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to upload image'
                    ], 500);
                }

                $category->image = $imageName; // fix chỗ này
            }
            if ($request->has('name')) {
                $category->name = $request->name;
            }
            if ($request->has('status')) {
                $category->status = $request->status;
            }
            $category->save();

            return response()->json([
                'success' => true,
                'message' => 'Category updated successfully',
                'data' => $category
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
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

            $category = Category::findOrFail($id);

            if ($category->products()->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Category cannot be deleted because it contains products',
                ], 500);
            }else{
                $category->delete();
                return response()->json([
                    'success' => true,
                    'message' => 'Category deleted successfully'
                ], 200);
            }


        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
