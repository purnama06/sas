<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentQualification;
use App\Qualification;
use Auth;


class StudentQualificationController extends Controller
{
    public function index()
    {
        $data['student_qualifications'] = StudentQualification::where('user_id', Auth::user()->id)->get();
        return view('applicant.student_qualification.index', $data);
    }

    public function create()
    {
        $data['qualifications'] = Qualification::orderBy('qualification_name', 'asc')->get();
        return view('applicant.student_qualification.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'subject_name' => 'required',
            'qualification_id' => 'required',
            'grade' => 'required',
            'score' => 'required'
        ]);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
    

        StudentQualification::create($input);

        return redirect()->route('my-qualification.index')->with('success', 'Add qualification successfully');
    }

    public function edit($id) 
    {
        $data['qualifications'] = Qualification::orderBy('qualification_name', 'asc')->get();
        $data['student_qualification'] = StudentQualification::findOrFail($id);
        return view('applicant.student_qualification.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject_name' => 'required',
            'qualification_id' => 'required',
            'grade' => 'required',
            'score' => 'required'
        ]);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
    

        StudentQualification::findOrFail($id)->update($input);

        return redirect()->route('my-qualification.index')->with('success', 'Update qualification successfully');
    }

    public function destroy($id) 
    {
        StudentQualification::findOrFail($id)->delete();
        return redirect()->route('my-qualification.index')->with('success', 'Delete qualification successfully');
    }

    public function storeQualification(Request $request) 
    {
        Qualification::create($request->all());

        return redirect()->back()->with('success', 'Qualification Successfully Added! Add them now.');
    }
}

