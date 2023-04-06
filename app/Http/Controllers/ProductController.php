<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function add_product()
    {

        $categories =Category::all();
      return view('admin.add_product',compact('categories'));
    }
    public function add_product_db(Request $request)
    {

        $pro = new Product;
        $pro->category_id=$request->category_id;
        $pro->title=$request->title;
        $pro->description=$request->description;
        $pro->price=$request->price;
        $pro->quantity=$request->quantity;
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/product', $fileName);
        $pro->image = $fileName;
        $categories=Category::find($request->category_id);
        $pro->save();
        return redirect()->back()->with("message","Product Added Successsfully");
    }

    public function show_product()
    {
        $pro = Product::all();
        return view('admin.show_product',compact('pro'));
    }
    public function show__product($id)
    {
        $pro = Product::whereHas('category', function($query) use ($id) {
            $query->where('id', $id);
        })->get();

        return view('admin.show__product',compact('pro'));
    }

    public function delete_product($id)
    {
        $pro =Product::find($id);
        $pro->delete();
        return redirect()->back()->with("message0","Product Deleted Successfully ");
    }
    public function edit_product($id)
    {
      $pro =Product::find($id);
      $data =Category::all();
      return view('admin.edit_product',compact('pro','data'));
    }
    public function edit_product_confirm(Request $request,$id)
    {
        $data =Category::all();
        $data->category_name=$request->category_name;

      $pro =Product::find($id);
      $pro->title=$request->title;
      $pro->description=$request->description;
      $pro->price=$request->price;
      $pro->quantity=$request->quantity;
      $imagename=$request->hidden;
      $image=$request->image;
      if($image !='')
      {$imagename=rand().$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('/product'),$imagename);
    }
      $pro->save();
      return redirect()->back()->with("message","Product Updated Successsfully");
    }
}
