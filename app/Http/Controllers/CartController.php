<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class CartController extends Controller
{
    public function cart()
    {
        $cart = Session::get('cart', []);
        $total = 0;
        foreach($cart as $key => $item){
            $total+= ($item['quantity']*$item['price']);
        }
        $shippingCost = 5;
        $data = [
            'cart' => $cart,
            'total' => $total,
            'shippingCost' => $shippingCost,
            'totalWithShipping' => $total + $shippingCost,
        ];
        return view('user.cart',$data);
    }

    public function addToCart($id){
       $product = Product::find($id);
       $cart = Session::get('cart', []);

       if(isset($cart[$id])){
           $cart[$id]['quantity']++;
       }else{
           $cart[$id] = [
               'id' => $product->id,
               'name' => $product->name,
               'price' => $product->price,
               'quantity' => 1,
               'image' => $product->image
           ];
       }
        //cập nhật giỏ hàng
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function cartDelete($id){
        $cart = Session::get('cart', []);
        if(isset($cart[$id])){
            unset($cart[$id]);
        }
        //cập nhật giỏ hàng
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }
}
