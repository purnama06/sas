@extends('applicant.layouts.app')

@section('title')
Edit Qualification
@endsection

@section('content')


<div class="container" style="min-height: 76.5vh;">
    <div class="row justify-content-center">        
        <div class="col-md-8 mt-5 mb-5">           
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">

                        <h5>Edit Qualifications</h5>
                        <hr>
                        <form action="{{ route('my-qualification.update', $student_qualification->id) }}" method="post" class="my-qualification">
                            @csrf 
                            @method('put')
                            <div class="form-group">
                                <label>Qualification Name</label>
                                <select name="qualification_id" class="form-control">
                                    <option value="#"> - Select Qualification - </option>
                                    @foreach($qualifications as $qualification)
                                        <option value="{{ $qualification->id }}" {{ $student_qualification->qualification_id == $qualification->id ? 'selected' : '' }} >{{ $qualification->qualification_name }}</option>
                                    @endforeach
                                </select>
                            </div> 

                            <div class="form-group">
                                <label>Subject Name</label>
                                <input type="text" class="form-control" name="subject_name" value="{{ $student_qualification->subject_name }}">
                            </div> 

                            <div class="form-group">
                                <label>Grade</label>
                                <input type="text" class="form-control" name="grade" value="{{ $student_qualification->grade }}">
                            </div> 

                            <div class="form-group">
                                <label>Score</label>
                                <input type="text" class="form-control" name="score" value="{{ $student_qualification->score }}">
                            </div> 
                            <div class="form-group">
                                <input type="submit" value="Save" class="btn btn-success float-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>            
        
    </div>
</div>

@endsection