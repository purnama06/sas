@extends('admin.layouts.app')

@section('title')
Add New Qualifications
@endsection

@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-md-8 mt-5">
            @include('admin.layouts.flash')
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('qualification.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-form-label">Qualification Name</label>
                            <input class="form-control" type="text" value="{{ old('qualification_name') }}" name="qualification_name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Minumum Score</label>
                            <input class="form-control" type="text" value="{{ old('minimum_score') }}" name="minimum_score">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Maximum Score</label>
                            <input class="form-control" type="text" value="{{ old('maximum_score') }}" name="maximum_score">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Result Calc. Description</label>
                            <textarea class="form-control" name="result_calc_description">{{ old('result_calc_description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Grade List</label>
                            <textarea class="form-control" name="grade_list">{{ old('grade_list') }}</textarea>
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