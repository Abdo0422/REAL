<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Orders;

class AdminController extends Controller
{
    public function view_categories()
    {
        $data =Category::all();
      return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with("message","Category Added Successfully");

    }
    public function delete_category($id)
    {
        $data =Category::find($id);
        $data->delete();
        return redirect()->back()->with("message0","Category Deleted Successfully ");
    }
    public function view_product()
    {
        $data =Product::all();
        return view('admin.product',compact('data'));
    }
    public function view_orders() {
        $data = Orders::all();
        return view('admin.orders',compact('data'));
    }
    public function delete_order($id)
    {
        $data =Orders::find($id);
        $data->delete();
        return redirect()->back()->with("message0","Order Deleted Successfully ");
    }



}
