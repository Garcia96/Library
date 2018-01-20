<?php

namespace App\Http\Controllers;
use App\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Author::all();
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
        $author = new Author;

        if($author->create($request->all())){
            return response()->json(['message' => 'Author created'], 201);
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
        $author = Author::findOrFail($id);
        return response()->json($author);
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
        $author = Author::findOrFail($id);
        if($author->update($request->all())){
            return response()->json(['message' => 'Author created', $author], 200);
        }else{
            return response()->json(['message' => 'Something went wrong', $author], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return response()->json(null, 204);
    }
}
