<?php

namespace App\Http\Controllers;

use App\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.qualification.index')->with('qualifications', Qualification::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.qualification.create');
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
            'qualification_name' => 'required',
            'minimum_score' => 'required',
            'maximum_score' => 'required',
            'result_calc_description' => 'required',
            'grade_list' => 'required',
        ]);

        Qualification::create($request->all());

        return redirect()->route('qualification.index')->with('success', 'Qualification Successfully Added!');
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
        return view('admin.qualification.edit')->with('qualification', Qualification::findOrFail($id));
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
            'qualification_name' => 'required',
            'minimum_score' => 'required',
            'maximum_score' => 'required',
            'result_calc_description' => 'required',
            'grade_list' => 'required',
        ]);

        Qualification::findOrFail($id)->update($request->all());

        return redirect()->route('qualification.index')->with('success', 'Qualification Successfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Qualification::findOrFail($id)->delete();
        return redirect()->route('qualification.index')->with('success', 'Qualification Successfully Deleted!');
    }
}
