<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('products',['products'=>$products]);

    }
    public function show($id){
        $product=Product::find($id);
        return view('show',['product'=>$product]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id){
        $product=Product::find($id);
        return view('edit',['product'=>$product]);
    }

    public function update(Request $request,$id){
        $product=Product::find($id);
        $product->category=$request->category;
        $product->name=$request->name;
        $product->code=$request->code;
        $product->price=$request->price;
        $product->photo=$request->photo;
        $product->characteristics=$request->characteristics;
        $product->save();
        return redirect('/products');
    }
    public function delete($id){
        $product=Product::find($id);
        $product->delete();
        return redirect('/products');


    }
}
