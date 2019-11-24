<?php

namespace App\Http\Controllers;

use App\Programme;
use App\University;
use Illuminate\Http\Request;
use Auth;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_university = Auth::user()->universityAdmin[0]['id'];
        $programmes = University::find($user_university)->programmeUniversity;
        
        return view('admin.programme.index')->with('programmes', $programmes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'programme_name' => 'required',
            'description' => 'required',
            'closing_date' => 'required',
        ]);

        $programme = Programme::create($request->all());
        
        $programme->universityProgramme()->attach($request->university_id);
        

        return redirect()->route('programme.index')->with('success', 'Programme Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.programme.edit')->with('programme', Programme::findOrFail($id));
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
        $this->validate($request, [
            'programme_name' => 'required',
            'description' => 'required',
            'closing_date' => 'required',
        ]);

        Programme::findOrFail($id)->update($request->all());

        return redirect()->route('programme.index')->with('success', 'Programme Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Programme::findOrFail($id)->delete();
        return redirect()->route('programme.index')->with('success', 'Programme Successfully Deleted!');
    }
}
