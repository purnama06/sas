@extends('admin.layouts.app')

@section('title')
Edit Qualification {{ $qualification->qualification_name }}
@endsection

@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-md-8 mt-5">
            @include('admin.layouts.flash')
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('qualification.update', $qualification->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-form-label">Qualification Name</label>
                            <input class="form-control" type="text" value="{{ $qualification->qualification_name }}" name="qualification_name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Minumum Score</label>
                            <input class="form-control" type="text" value="{{ $qualification->minimum_score }}" name="minimum_score">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Maximum Score</label>
                            <input class="form-control" type="text" value="{{ $qualification->maximum_score }}" name="maximum_score">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Result Calc. Description</label>
                            <textarea class="form-control" name="result_calc_description">{{ $qualification->result_calc_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Grade List</label>
                            <textarea class="form-control" name="grade_list">{{ $qualification->grade_list }}</textarea>                
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" class="form-control">
                                <option value="#"> - Select Status - </option>
                               
                                <option value="1" {{ $qualification->status == 1 ? 'selected' : '' }} >Verified</option>
                                <option value="0" {{ $qualification->status == 0 ? 'selected' : '' }} >Not Verified</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" class="btn btn-success float-right" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection