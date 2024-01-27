<?php

namespace App\Http\Controllers;

use App\Models\PicturesTopic;
use Illuminate\Http\Request;

class PicturesTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return PicturesTopic::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return PicturesTopic::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return PicturesTopic::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return PicturesTopic::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return PicturesTopic::destroy($id);
    }
}
