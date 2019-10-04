<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
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

    public function get()
    {
        return DB::table('products')->get();
    }

    public function getById($id)
    {
        return DB::table('products')->where('id', '=', $id)->get();
    }

    public function create(Request $request)
    {
        $insert = DB::table('products')->insertGetId([
            'name' => $request['name'],
            'unit' => $request['unit'],
            'value' => $request['value']
        ]);

        return $insert;
    }

    public function update($id, Request $request)
    {
        dd($id, $request);
    }

    public function delete($id)
    {
        dd($id);
    }
}
