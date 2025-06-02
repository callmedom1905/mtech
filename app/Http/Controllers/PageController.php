<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;

class PageController extends Controller
{
    public function index()
    {
        $productFeatures = Product::orderBy('view', 'DESC')->take(6)->get();
        $productNews = Product::orderBy('id', 'DESC')->take(6)->get();
        $categoryList = Category::all();
        $banner = Banner::all();
        $data = [
            'productFeatures' => $productFeatures,
            'productNews' => $productNews,
            'categoryList' => $categoryList,
            'banner' => $banner,
        ];
        return view('user.home', $data);
        // return view('user.home');
    }

    public function productList()
    {
        $productList = Product::simplePaginate(6);
        $categoryList = Category::all();
        $data = [
            'productList' => $productList,
            'categoryList' => $categoryList
        ];
        return view('user.product', $data);
    }

    // public function login(){
    //     return view('user.login');
    // }

    // public function register(){
    //     return view('user.register');
    // }

    public function contact()
    {
        return view('user.contact');
    }


    public function home()
    {
        $productFeatures = Product::orderBy('view', 'DESC')->take(6)->get();
        $productNews = Product::orderBy('id', 'DESC')->take(6)->get();
        $categoryList = Category::all();
        $banner = Banner::all();
        $data = [
            'productFeatures' => $productFeatures,
            'productNews' => $productNews,
            'categoryList' => $categoryList,
            'banner' => $banner,
        ];
        return view('user.home', $data);
    }


    public function checkout(){
        return view('user.checkout');
    }


}
