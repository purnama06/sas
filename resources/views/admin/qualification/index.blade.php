@extends('admin.layouts.app')

@section('title')
Qualifications
@endsection


@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-12 mt-5">
            
            @include('admin.layouts.flash')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Qualifications</h4>
                    <a href="{{ route('qualification.create') }}" class="btn btn-sm btn-primary">Add</a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Qualification Name</th>
                                <th>Minimum Score</th>
                                <th>Maximum Score</th>
                                <th>Result Calc. Description</th>
                                <th>Grade List</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($qualifications as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->qualification_name }}</td>
                                <td>{{ $row->minimum_score }}</td>
                                <td>{{ $row->maximum_score }}</td>
                                <td>{{ $row->result_calc_description }}</td>
                                <td>{!! $row->grade_list !!}</td>
                                <td>
                                    <form action="{{ route('qualification.destroy', $row->id) }}" method="post">
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="{{ route('qualification.edit', $row->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                            @csrf
                                            @method('delete')
                                            <li><button type="submit" class="text-danger btn-submit" onclick="return confirm('Are you sure want to delete this data?')" ><i class="ti-trash"></i></button></li>
                                        </ul>
                                    </form>
                                </td>
                            </tr>
                            @empty 
                            <tr>
                                <td colspan="7">Data qualifications not available</td>
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