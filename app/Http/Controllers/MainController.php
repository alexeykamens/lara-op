<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product; //пространство имен  для Product::find
use App\Product_category;

class MainController extends Controller
{
    
    public function index(){

    	$products = Product::paginate(15);
    	return view('index', compact('products'));
    }
    public function single(){
    	
    	return view('singleproduct', compact('products'));
    }

}
