<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_categories()
    {
        $data =category::all();
      return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with("message","Category Added Successfully");

    }
    public function delete_category($id)
    {
        $data =category::find($id);
        $data->delete();
        return redirect()->back()->with("message0","Category Deleted Successfully ");
    }
    public function view_product()
    {
        $data =category::all();
      return view('admin.product',compact('data'));
    }
    public function add_product(Request $request)
    {
      $pro = new product;
      $pro->title=$request->title;
      $pro->description=$request->description;
      $pro->price=$request->price;
      $pro->category=$request->category;
      $pro->quantity=$request->quantity;
      $image=$request->image;
      $imagename=$request->hidden;
      if($image !='')
      {$imagename=rand().$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('/product'),$imagename);}


      $pro->save();
      return redirect()->back()->with("message","Product Added Successsfully");
    }
    public function show_product()
    {
      $pro =product::all();
      return view('admin.show_product',compact("pro"));
    }
    public function delete_product($id)
    {
        $pro =product::find($id);
        $pro->delete();
        return redirect()->back()->with("message0","Product Deleted Successfully ");
    }
    public function edit_product($id)
    {
      $pro =product::find($id);
      $data =category::all();
      return view('admin.edit_product',compact('pro','data'));
    }
    public function edit_product_confirm(Request $request,$id) {
      $pro =product::find($id);
      $pro->title=$request->title;
      $pro->description=$request->description;
      $pro->price=$request->price;
      $pro->category=$request->category;
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
