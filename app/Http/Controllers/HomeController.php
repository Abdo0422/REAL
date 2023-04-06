<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Orders;
use App\Models\User;


class HomeController extends Controller
{

    public function redirect()
    {
        if(!empty(Auth::user()) && Auth::user()->usertype == 1 )
        {
            $total_product=Product::all()->count();
            $total_order=Orders::all()->count();
            $total_customers=User::where("usertype","=","0")->count();
            $order_pending=Orders::where('status','=',"pending")->get()->count();
            $order_delivered=Orders::where('status','=',"delivered")->get()->count();
            return view('admin.home',compact("total_product","total_customers","total_order","order_pending","order_delivered"));
        }
        else
        {
            return view('home.userpage');
        }
    }

}

