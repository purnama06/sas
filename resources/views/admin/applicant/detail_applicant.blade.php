@extends('admin.layouts.app')

@section('title')
Detail Applicant {{ ucwords($application->user->name) }}
@endsection


@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-12 mt-5">
            
            @include('admin.layouts.flash')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Review Applicant</h4>
                    <br>
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ ucwords($application->user->name) }}</td>
                        </tr>
                        <tr>
                            <td>ID Type & Number</td>
                            <td>:</td>
                            <td>{{ $application->user->applicant->id_type . ', ' .$application->user->applicant->id_number }}</td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                            <td>:</td>
                            <td>{{ $application->user->applicant->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td>Mobile No.</td>
                            <td>:</td>
                            <td>{{ $application->user->applicant->mobile_no }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $application->user->email }}</td>
                        </tr>
                    </table>
                    <br>
                    <h4 class="header-title">Applicant Qualification</h4>
                    <br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Qualification Name</th>
                                <th>Subject Name</th>
                                <th>Grade</th>
                                <th>Score</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($qualifications) != 0)
                                @foreach($qualifications as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->qualification->qualification_name }}</td>
                                    <td>{{ $row->subject_name }}</td>
                                    <td>{{ $row->grade }}</td>
                                    <td>{{ $row->score }}</td>
                                    
                                </tr>
                                @endforeach
                            @else 
                                <tr>
                                    <td colspan="6">You don't have any qualifications yet.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <hr><br>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('application.change', $application->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Result Qualification</label>
                                    <select name="status" class="form-control">
                                        <option value=""> - Select Status - </option>
                                        <option value="new" {{ $application->status == 'new' ? 'selected' : '' }}>New</option>
                                        <option value="successful" {{ $application->status == 'successful' ? 'selected' : '' }}>Successful</option>
                                        <option value="unsuccessful" {{ $application->status == 'unsuccessful' ? 'selected' : '' }}>Unsuccessful</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-sm float-right" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection