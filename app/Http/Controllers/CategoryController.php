<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('category_id', $id)->paginate(15);
        return view('index', compact('products'));
    }

  
}
