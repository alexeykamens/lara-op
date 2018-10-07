<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 

class CartController extends Controller
{
    
    public function index()
    {
        
       $cart = session('cart');
       $total=0;
       if (isset($cart[0])) {
           for ($i=0, $total=0;  $i < count($cart); $i++) { 
              $total+=$cart[$i]['price']*$cart[$i]['qtt'];
           }
       }
// $request->session()->forget('cart');
       return view('cart', compact('cart', 'total'));
    }

    public function store(Request $request)
    {

        $qtt=$request->qtt;
        $cartData=unserialize($request->cartData);
        $id= $cartData[0];
        $product = Product::find($id);
        $price=$product->price;
        $url=$product->url;
        $img=asset('storage/'.$url.'1.JPG');
         
        $img=$product->imgExistReturn($product->url, 1);
       

         // dump($cartData);
        // $id=$cartData->id;
        $request->session()->push('cart', compact('qtt', 'id', 'price', 'img'));
        // session()->forget('cart');
        return redirect('/cart');
    }

   
    public function destroy(Request $request)
    {
        $i=$request->i;
       if ($i==='all') {
        session()->put('cart', []);
       }
       else {
        // session()->forget('cart.'.$i);
        $cart = session('cart');
        array_splice($cart, $i, 1);
        session(['cart'=> $cart]);
       }
       return redirect('/cart');
    }
}
