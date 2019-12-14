@extends('admin.layouts.app')

@section('title')
Applicants
@endsection


@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-12 mt-5">
            
            @include('admin.layouts.flash')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Applicants</h4>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Applicant Name</th>
                                <th>Programme Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($applicants as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ ucwords($row->user->name) }}</td>
                                <td>{{ $row->programme->programme_name }}</td>
                                <td>{{ $row->application_date }}</td>
                                <td>{!! $row->getStatus() !!}</td>
                                <td>
                                    <ul>
                                        <li class="mr-3"><a href="{{ route('applicant.detail', $row->id) }}" class="text-success" title="See Applicants Details"><i class="fa fa-list"></i></a></li>                                            
                                    </ul>                                    
                                </td>
                            </tr>
                            @empty 
                            <tr>
                                <td colspan="6">Data Applicants are not available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection