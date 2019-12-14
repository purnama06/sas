<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Application;
use App\Notifications\ReviewFailNotification;
use App\Notifications\ReviewSuccessNotification;
use App\User;
use App\Qualification;
use App\StudentQualification;

class ApplicationController extends Controller
{
    public function studentApply($programme_id)
    {
        $qualification = StudentQualification::where('user_id', Auth::user()->id)->get();
        if(count($qualification) == 0){
            return redirect()->route('my-qualification.index')->with('warning', 'Before you apply for the programme make sure you have a qualification at least 1.');
        }

        $application = Application::where('user_id', Auth::user()->id)->where('programme_id', $programme_id)->where('status', 'new')->count();
        if($application == 1){
            return redirect()->route('my-application.index')->with('error', 'Apply failed, because you already apply for this programme!');
        }

        $data = [
            'programme_id' => $programme_id,
            'user_id' => Auth::user()->id,
            'application_date' => date('Y-m-d'),
            'status' => 'new'
        ];

        Application::create($data);

        return redirect()->route('my-application.index')->with('success', 'Apply for programme successfully!');
    }

    public function studentIndex()
    {
        $data['applications'] = Application::where('user_id', Auth::user()->id)->get();
        return view('applicant.student_application.index', $data);
    }

    public function applicants($programme_id)
    {
        $data['applicants'] = Application::where('programme_id', $programme_id)->get();
        return view('admin.applicant.index', $data);
    }

    public function applicantDetail($id) 
    {
        $data['application'] = Application::findOrFail($id);
        $data['qualifications'] = StudentQualification::where('user_id', $data['application']->user_id)->get();

        return view('admin.applicant.detail_applicant', $data);
    }

    public function changeStatus(Request $request, $id)
    {
        $application = Application::findOrFail($id);
        $applicant = User::findOrFail($application->user_id);
        switch ($request->status) {
            case 'successful':
                $applicant->notify(new ReviewSuccessNotification($applicant, $application));
                break;

            case 'unsuccessful':
                $applicant->notify(new ReviewFailNotification($applicant, $application));
                break;
            
            default:
                # code...
                break;
        }
        
        $update = $application->update([
            'status' => $request->status,
        ]);

        return redirect()->route('applicants', $application->programme_id)->with('success', 'Update applicant successfully');
    }
}
