<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
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
}
?>
