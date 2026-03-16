<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

public function index(Request $request)
{

$search = $request->search;

$products = Product::where('name','LIKE',"%$search%")->get();

return view('products.index',compact('products','search'));

}


public function store(Request $request)
{

$request->validate([
'name'=>'required',
'price'=>'required|numeric',
'category'=>'required',
'image'=>'image|mimes:jpg,png,jpeg'
]);

$imageName = null;

if($request->image)
{
$imageName = time().'.'.$request->image->extension();
$request->image->move(public_path('images'),$imageName);
}

Product::create([
'name'=>$request->name,
'price'=>$request->price,
'category'=>$request->category,
'image'=>$imageName
]);

return redirect('/')->with('success','Product Added Successfully');

}



public function edit($id)
{
$product = Product::findOrFail($id);

return view('products.edit',compact('product'));
}



public function update(Request $request,$id)
{

$product = Product::findOrFail($id);

$imageName = $product->image;

if($request->image)
{
$imageName = time().'.'.$request->image->extension();
$request->image->move(public_path('images'),$imageName);
}

$product->update([
'name'=>$request->name,
'price'=>$request->price,
'category'=>$request->category,
'image'=>$imageName
]);

return redirect('/')->with('success','Product Updated');

}


public function destroy($id)
{
Product::destroy($id);

return redirect('/')->with('success','Product Deleted');
}

}