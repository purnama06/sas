<?php

namespace App\Http\Controllers;

use App\Programme;
use Illuminate\Http\Request;
use App\University;

class ListingController extends Controller
{
    public function home()
    {
        $data['universities'] = University::all();
        $data['programmes'] = Programme::where('closing_date', '>', date('Y-m-d'))->get();
        return view('applicant.welcome', $data);
    }

    public function universityProgramme($univ_id)
    {
        $university = new University();
        
        $data['programmes'] = $university->find($univ_id)->programmeUniversity()->where('closing_date', '>', date('Y-m-d'))->get();
        $data['university'] = $university->find($univ_id);
        
        return view('applicant.university_programmes', $data);
    }

    public function detailProgramme($programme_id)
    {
        $programme = Programme::find($programme_id);
        $data['programme'] = $programme;
        $data['university'] = $programme->universityProgramme[0];
        return view('applicant.detail_programme', $data);
    }
}
