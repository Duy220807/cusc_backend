<?php

namespace App\Http\Controllers;

use App\Models\TagsPicture;
use Illuminate\Http\Request;

class TagsPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return TagsPicture::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return TagsPicture::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return TagsPicture::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return TagsPicture::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return TagsPicture::destroy($id);
    }
}
