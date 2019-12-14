@extends('applicant.layouts.app')

@section('title')
My Qualification
@endsection

@section('content')


<div class="container" style="min-height: 76.5vh;">
    <div class="row justify-content-center">        
        <div class="col-md-8 mt-5 mb-5">           
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">

                        <h5>My Qualifications</h5>
                        <hr>

                        <a href="{{ route('my-qualification.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Qualification</a>
               
                        <table class="table mt-3 my-qualification table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Qualification Name</th>
                                    <th>Subject Name</th>
                                    <th>Grade</th>
                                    <th>Score</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($student_qualifications) != 0)
                                    @foreach($student_qualifications as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->qualification->qualification_name }}</td>
                                        <td>{{ $row->subject_name }}</td>
                                        <td>{{ $row->grade }}</td>
                                        <td>{{ $row->score }}</td>
                                        <td>
                                        <form action="{{ route('my-qualification.destroy', $row->id) }}" method="post">
                                            <ul class="d-flex">
                                                <li class="mr-3"><a href="{{ route('my-qualification.edit', $row->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                @csrf
                                                @method('delete')
                                                <li><button type="submit" class="text-danger btn-submit" onclick="return confirm('Are you sure want to delete this data?')" ><i class="ti-trash"></i></button></li>
                                            </ul>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else 
                                    <tr>
                                        <td colspan="6">You don't have any qualifications yet.</td>
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