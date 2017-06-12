<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// Get all the pages
		$pages = Page::with('asset')->get();

        $response = [
            'pages' => $pages
        ];

        return response()->json($response,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form input data
        $this->validate($request, [
            'asset_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        // Store form input data in database
        $page = new Page;
        
        $page->asset_id = $request->input('asset_id');
        $page->name = $request->input('name');
        $page->slug = $request->input('slug');
        $page->description = $request->input('description');

        $page->save();

        return response()->json(['page' => $page], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find record from database
        $page = Page::find($id);

        return response()->json(['page' => $page], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate form input data
        $this->validate($request, [
            'asset_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        // Store form input data in database
        $page = Page::find($id);

        $page->asset_id = $request->input('asset_id');
        $page->name = $request->input('name');
        $page->slug = $request->input('slug');
        $page->description = $request->input('description');

        $page->save();

        return response()->json(['page' => $page], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Find record from database and store as a var
        $page = Page::find($id);

        // Remove from database
        $page->delete();

        return response()->json([
            'page' => $page,
            'message' => 'deleted successfully'
        ], 201);
    }
}
