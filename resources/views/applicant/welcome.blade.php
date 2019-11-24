@extends('applicant.layouts.app')

@section('title', 'Welcome')

@section('content')


<div class="jumbotron jumbotron-fluid bg-default">
    <div class="container">
        <h3 class="display-4">Student Application System</h3>
        <hr class="my-2 mt-3 mb-3">
        <p class="lead">The Student Application System (SAS) is an information system that will allow school leavers to view the programmes available at different universities and submit applications to join the programmes easily. </p>
        
    </div>
</div>


<div class="container" style="min-height: 76.5vh;">
    <div class="row">
        
        <div class="col-md-6 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">

                        <h5>List of Programmes Available</h5>
                        <hr>
                        <ul style="font-size:14px" class="sas-list">
                            @forelse($programmes as $programme)
                                <li class="mb-3">
                                    <small class="lead d-block" style="font-size:13px;">Closing Date: {{ $programme->closing_date }}</small>
                                    <a href="{{ route('programme.detail', $programme->id) }}">{{ $programme->programme_name }}</a>
                                    
                                </li>
                            @empty
                                <li>Programmes are not available</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">

                        <h5>List of Universities</h5>
                        <hr>
                        <ul style="font-size:14px" class="sas-list">
                            @forelse($universities as $university)
                                <li><a href="{{ route('university.programme', $university->id) }}">{{ $university->university_name }}</a></li>
                            @empty
                                <li>Universities are not available</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

@endsection