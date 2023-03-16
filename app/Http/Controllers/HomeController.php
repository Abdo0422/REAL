<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        return view('home.userpage');
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
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

