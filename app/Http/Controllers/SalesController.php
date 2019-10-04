<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
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
        return "get";
    }

    public function getById($id)
    {
        return $id;
    }

    public function create(Request $request)
    {
        dd($request);
    }

    public function update($id, Request $request)
    {
        dd($id, $request);
    }
}
