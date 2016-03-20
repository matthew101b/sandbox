<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function index(){
    	$webform = '';
    	return view('products.stock', compact('form'));
    }

    public function store(Request $request){
    	$data['name'] = $request->product_name;
    	$data['quantity'] = $request->quantity;
    	$data['price'] = $request->price;
    	return response()->json($data);
    }


}
