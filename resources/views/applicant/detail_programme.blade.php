@extends('applicant.layouts.app')

@section('title')
Detail Programmes {{ $programme->programme_name }}
@endsection

@section('content')


<div class="container" style="min-height: 76.5vh;">
    <div class="row justify-content-center">        
        <div class="col-md-8 mt-5 mb-5">
            <a href="javascript:history.back()">Back</a>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title">

                        <h5>{{ $programme->programme_name }}</h5>
               
                        <table class="table mt-3 table-sm programme-table">
                            <tr>
                                <td>Closing Date</td>
                                <td>:</td>
                                <td>{{ $programme->closing_date }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td>{!! $programme->description !!}</td>
                            </tr>                            
                        </table>
                        <a href="#" class="btn btn-sm btn-success float-right">Apply for this programme</a>

                    </div>
                </div>
            </div>
        </div>            
        
    </div>
</div>

@endsection