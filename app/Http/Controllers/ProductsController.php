<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
// use App\Services\dbFunctionService;

class ProductsController extends Controller
{
    // protected $categoryService;
    // public function __construct(Categories $categories)
    // {
    //    $this->categoryService = $categories;
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('instock','=', 1)->paginate(15);
        return view('index', compact('products'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $currentproduct = Product::find($id);
        $relatedproducts = Product::find([1, 2, 3, 4]);
        return view('singleproduct', compact('relatedproducts', 'id', 'currentproduct'));
    }
    

}
