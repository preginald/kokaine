<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// Get all the assets
		$assets = Asset::with('organisation', 'pages')->get();

        $response = [
            'assets' => $assets
        ];

        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Validate form input data
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        // Store form input data in database
        $asset = new Asset;
        $asset->name = $request->name;
        $asset->description = $request->description;
        $asset->save();

        return response()->json(['asset' => $asset], 201);
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        // Store form input data in database
        $asset = new Asset;
        $asset->name = $request->name;
        $asset->description = $request->description;
        $asset->save();

        return response()->json(['asset' => $asset], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find record from database
        $asset = Asset::find($id);

        return response()->json(['asset' => $asset], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // Validate form input data
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        // Store form input data in database
        $asset = Asset::find($id);

        $asset->name = $request->input('name');
        $asset->description = $request->input('description');

        $asset->save();
        
        return response()->json(['asset' => $asset], 201);
    }

    /**
     * Attach the Organisation to Asset. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function attachOrganisation(Request $request, $id)
    {
        // Validate form input data
        $this->validate($request, [
            'organisation' => 'required'
        ]);

        // Find record from database and store as a var
        $asset= Asset::find($id);

        $asset->organisations()->attach($request->input('organisation'));
        
        return response()->json(['asset' => $asset], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find record from database and store as a var
        $asset = Asset::find($id);

        // Remove from database
        $asset->delete();

        return response()->json([
            'asset' => $asset,
            'message' => 'deleted successfully'
        ], 201);
    }
}
