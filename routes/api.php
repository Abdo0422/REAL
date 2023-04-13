<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/search",function(Request $request) {
    $query = $request->query('q');
    $output = "";
    if (strlen($query) > 0) {
        $products = Product::where('title','like',$query.'%')->get();
        if (count($products) > 1) {

            foreach ($products as $product) {
                $output = `<ul><li>`.$product->title.`</li></ul>`;
            }

    }
    }





    return response()->json($output);
});


