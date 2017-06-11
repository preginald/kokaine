<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Organisation;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// Get all the organisations
		$organisations =  Organisation::all();

        $response = [
            'organisations' => $organisations
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
        //
        return view('/organisations.create');
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
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // Store form input data in database
        $organisation = new organisation;
        $organisation->name = $request->name;
        $organisation->email = $request->email;
        $organisation->phone = $request->phone;
        $organisation->save();

        return response()->json(['organisation' => $organisation], 201);

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
        $organisation = organisation::find($id);

        return response()->json(['organisation' => $organisation], 201);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find record from database and store as a var
        $organisation = Organisation::find($id);

        // Return edit view and pass in the var

        return view('organisations.edit',compact('organisation'));
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
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // Store form input data in database
        $organisation = Organisation::find($id);

        $organisation->name = $request->input('name');
        $organisation->email = $request->input('email');
        $organisation->phone = $request->input('phone');

        $organisation->save();
        
        return response()->json(['organisation' => $organisation], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Find record from database and store as a var
        $organisation = organisation::find($id);

        // Remove from database
        $organisation->delete();

        return response()->json([
            'organisation' => $organisation,
            'message' => 'deleted successfully'
        ], 201);

    }
	
    /**
     * Restore the specified resource to storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request, $id)
    {
        // Find record from database and store as a var
        $organisation = organisation::onlyTrashed()->where('id', $id)->restore();

        // Restore to database
        // $organisation->restore();

        // Set flash data with success message
        $request->session()->flash('success', 'The organisation was successfully restored!');

        // Redirect to index view
        return redirect()->route('organisations.index');
    }
}
