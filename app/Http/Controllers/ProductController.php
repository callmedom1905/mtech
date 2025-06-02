<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function detail($id){
        $product = Product::find($id);
        $productRelated = Product::where('category_id', $product->category_id)->take(4)->get();
        $category = Category::all();
        $data = [
            'product' => $product,
            'productRelated' => $productRelated,
            'category' => $category,
        ];
        return view('user.detail', $data);
    }

    public function search(Request $req)
    {
        $search = $req->search;
        $productSearch = Product::where('name', 'LIKE', '%' . $search . '%')->paginate(6);
        $categoryList = Category::all();
        $data = [
            'productSearch' => $productSearch,
            'categoryList' => $categoryList,
            'search' => $search
        ];
        return view('user.search', $data);
    }

    public function productCategory($id){
        $productList = Product::where('category_id', $id)->paginate(6);
        $categoryList = Category::all();
        $data = [
            'productList' => $productList,
            'categoryList' => $categoryList,
        ];
        return view('user.product_category', $data);
    }
}
