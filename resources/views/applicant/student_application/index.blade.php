@extends('applicant.layouts.app')

@section('title')
My Applications
@endsection

@section('content')


<div class="container" style="min-height: 76.5vh;">
    <div class="row justify-content-center">        
        <div class="col-md-8 mt-5 mb-5">           
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">

                        <h5>My Applications</h5>
                        <hr>
                        <a href="{{ route('home') }}" class="btn btn-sm btn-primary btn-sm">Apply another programme</a>
                        <table class="table mt-3 my-qualification table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Programme Name</th>
                                    <th>Date</th>
                                    <th>Status</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($applications) != 0)
                                    @foreach($applications as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->programme->programme_name }}</td>
                                        <td>{{ $row->application_date }}</td>
                                        <td>{!! $row->getStatus() !!}</td>
                                        
                                    </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="6">You don't have any applications yet.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        

                    </div>
                </div>
            </div>
        </div>            
        
    </div>
</div>

@endsection