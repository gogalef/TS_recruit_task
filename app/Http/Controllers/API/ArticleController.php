<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        var_dump(1);die();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {
        var_dump($request->all());die();
    }

    /**
     * Display the specified resource.
     */
    public function view(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
    }
}
