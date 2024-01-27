<?php

namespace App\Http\Controllers;

use App\Models\HistoriesPosition;
use Illuminate\Http\Request;

class HistoriesPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return HistoriesPosition::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return HistoriesPosition::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return HistoriesPosition::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return HistoriesPosition::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return HistoriesPosition::destroy($id);
    }
}
