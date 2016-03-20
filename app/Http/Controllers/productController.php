<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class productController extends Controller
{
    public function index(){
    	return view('products.stock');
    }

    public function store(Request $request){

    	$data['name'] = $request->product_name;
    	$data['quantity'] = $request->quantity;
    	$data['price'] = $request->price;
    	$data['sub_total'] = $request->quantity * $request->price;
    	$data['date'] = date('Y-m-d H:i:s');
    	$data['total'] = $data['sub_total'] + $request->current_amount;
    	return response()->json($data);
    	
    }





}