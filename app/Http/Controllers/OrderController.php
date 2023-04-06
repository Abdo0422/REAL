<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function view_orders()
    {
        $order =Orders::all();
      return view('admin.view_orders',compact('order'));
    }
    public function edit_order($id)
    {
        $order = Orders::find($id);
        return view('admin.edit_order',compact('order'));
    }
    public function edit_order_confirm(Request $request,$id) {
        $order = Orders::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->back()->with("message","Order Updated Successsfully");

      }

    public function delete_order($id) {
        $order = Orders::find($id);
        $order->delete();
        return redirect()->back()->with("message0","Order Deleted Successfully ");

    }
    public function show_your_order(Request $request)
    {
      $search = Orders::where('name','LIKE','%$search%')->orWhere('id','LIKE','%$search%')->paginate(2);
      return view('admin.show_your_order',compact("search"));
    }
}
