<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::with('users')->get();;
        return view('schools.index', ['schools' => $schools]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schools.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {
            $school = School::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email
        ]);
        $school->save();
        return back()->with('message', 'School added. Thank you for your input.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return view('schools.show', ['school' => $school]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('schools.edit', ['school' => $school]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        $school->update($request->all());

        return redirect()->route('schools.index')->with('message', 'School Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $school->delete();
        $usersToDelete = User::where('school_id', $school->id)->get();
        $usersToDelete->each->delete();

        return back()->with('message', $school->name . ' was deleted Successfully');

    }
}
