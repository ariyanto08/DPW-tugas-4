<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ClientController extends Controller{

    function showHome(){
        $data['list_product'] = Product::all();
        return view('template.home',$data);
    }
    function showShop(){
        $data['list_product'] = Product::all();
        return view('template.shop',$data);
    }
    function showCart(){
        return view('template.cart');
    }
    function showAbout(){
        return view('template.about');
    }
    function showContact(){
        return view('template.contact');
    }
    function showShoping(){
        return view('template.shoping');
    }
    function showDetail(Product $product){
        $data['product'] = $product;
        return view('template.produk',$data);
    }
}