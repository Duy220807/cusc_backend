<?php

namespace App\Http\Controllers;

use App\Models\ReportsPicture;
use Illuminate\Http\Request;

class ReportsPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ReportsPicture::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return ReportsPicture::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return ReportsPicture::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return ReportsPicture::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return ReportsPicture::destroy($id);
    }
}
