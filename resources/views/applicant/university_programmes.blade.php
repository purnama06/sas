@extends('applicant.layouts.app')

@section('title')
Programmes at {{ $university->university_name }}
@endsection

@section('content')


<div class="container" style="min-height: 76.5vh;">
    <div class="row justify-content-center">
        
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">

                        <h5>List of Programmes Available at {{ $university->university_name }}</h5>
                        <hr>
                        <ul style="font-size:14px" class="sas-list">
                            @forelse($programmes as $programme)
                                <li>                                    
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
        
    </div>
</div>

@endsection