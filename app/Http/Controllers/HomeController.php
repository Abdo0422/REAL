<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Orders;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        return view('home.userpage');
    }
    public function redirect()
    {
        if(!empty(Auth::user()) && Auth::user()->usertype == 1 )
        {
            $total_product=product::all()->count();
            $total_order=orders::all()->count();
            $total_customers=user::where("usertype","=","0")->count();
            $order_pending=orders::where('status','=',"pending")->get()->count();
            $order_delivered=orders::where('status','=',"delivered")->get()->count();
            return view('admin.home',compact("total_product","total_customers","total_order","order_pending","order_delivered"));
        }
        else
        {
            return view('home.userpage');
        }
    }
    public function search_product(Request $request) {
        $data = Product::find($request->search);
        return view('home.userpage',compact('data'));
    }
}

