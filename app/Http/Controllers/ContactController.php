<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// Get all the contacts
		$contacts = Contact::with('organisations')->get();

        $response = [
            'contacts' => $contacts
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
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // Store form input data in database
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        return response()->json(['contact' => $contact], 201);
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
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        return response()->json(['contact' => $contact], 201);
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
        $contact = Contact::find($id);

        return response()->json(['contact' => $contact], 201);
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
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        // Store form input data in database
        $contact = Contact::find($id);

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');

        $contact->save();
        
        return response()->json(['contact' => $contact], 201);
    }

    /**
     * Attach the Organisation to Contact. 
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
        $contact= Contact::find($id);

        $contact->organisations()->attach($request->input('organisation'));
        
        return response()->json(['contact' => $contact], 201);
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
        $contact = Contact::find($id);

        // Remove from database
        $contact->delete();

        return response()->json([
            'contact' => $contact,
            'message' => 'deleted successfully'
        ], 201);
    }
}
