<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $products = DB::table('products')->get();
        return view('shopping.index')->with(compact('products'));
    }
    
    public function addToCart($id)
    {
        $pc = new ProductsController();
        $fom = $pc->getById($id);

        dd($fom);
    }

    public function productPage($id)
    {
        $product = DB::table('products')->where('id', '=', $id)->first();
        return view('shopping.product')->with(compact('product'));
    }
}
