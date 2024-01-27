<?php

namespace App\Http\Controllers;

use App\Models\ProductsTag;
use Illuminate\Http\Request;

class ProductsTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ProductsTag::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return ProductsTag::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return ProductsTag::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return ProductsTag::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return ProductsTag::destroy($id);
    }
}
