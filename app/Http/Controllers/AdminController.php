<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_categories()
    {
      return view('admin.category');
    }
    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name=$request->catagory;
        $data->save();
        return redirect()->back()->with("message","Category Added Successfully");

    }
}
