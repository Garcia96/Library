<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Editorial::all();
        //return response()->json(Editorial::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorial = new Editorial;
        if($editorial->create($request->all())){
            return response()->json(['message' => 'Editorial created'], 201);
        }else{
            return response()->json(['message' => 'Something went wrong'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editorial = Editorial::find($id);
        return response()->json($editorial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editorial = Editorial::findOrFail($id);
        
        
        if($editorial->update($request->all())){
            return response()->json(['message' => 'Editorial updated', $editorial], 200);
        }else{
            return response()->json(['message' => 'Something went wrong', $editorial], 200);
        }
        error_log($request->name);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $editorial = Editorial::findOrFail($id);
        $editorial->delete();

        return response()->json(null, 204);
    }
}
