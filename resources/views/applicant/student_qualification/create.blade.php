@extends('applicant.layouts.app')

@section('title')
Add Qualification
@endsection

@section('content')


<div class="container" style="min-height: 76.5vh;">
    <div class="row justify-content-center">        
        <div class="col-md-8 mt-5 mb-5">           
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">

                        <h5>Add Qualifications</h5>
                        <hr>
                        <form action="{{ route('my-qualification.store') }}" method="post" class="my-qualification">
                            @csrf 
                            <div class="form-group">
                                <label>Qualification Name</label>
                                <select name="qualification_id" class="form-control">
                                    <option value="#"> - Select Qualification - </option>
                                    @foreach($qualifications as $qualification)
                                        <option value="{{ $qualification->id }}" {{ old('qualification_id') == $qualification->id ? 'selected' : '' }} >{{ $qualification->qualification_name }}</option>
                                    @endforeach
                                </select>
                                <small><a href="#" data-toggle="modal" data-target="#exampleModal">if your qualification not found, click here.</a> </small>
                            </div> 

                            <div class="form-group">
                                <label>Subject Name</label>
                                <input type="text" class="form-control" name="subject_name" value="{{ old('subject_name') }}">
                            </div> 

                            <div class="form-group">
                                <label>Grade</label>
                                <input type="text" class="form-control" name="grade" value="{{ old('grade') }}">
                            </div> 

                            <div class="form-group">
                                <label>Score</label>
                                <input type="text" class="form-control" name="score" value="{{ old('score') }}">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Qualification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('my-qualification.store_qualification') }}" method="post">
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label class="col-form-label">Qualification Name</label>
                    <input class="form-control" type="text" value="{{ old('qualification_name') }}" name="qualification_name">
                </div>
                <input type="hidden" value="0" name="status">
                <input type="hidden" value="not set" name="minimum_score">
                <input type="hidden" value="not set" name="maximum_score">
                <input type="hidden" value="not set" name="result_calc_description">
                <input type="hidden" value="not set" name="grade_list">
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add New Qualification</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection