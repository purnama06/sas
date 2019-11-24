@extends('admin.layouts.app')

@section('title')
Programmes
@endsection


@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-12 mt-5">
            
            @include('admin.layouts.flash')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Programmes</h4>
                    <a href="{{ route('programme.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>University</th>
                                <th>Programme Name</th>                                
                                <th>Description</th>
                                <th>Closing Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($programmes as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Auth::user()->universityAdmin[0]['university_name'] }}</td>
                                <td>{{ $row->programme_name }}</td>
                                <td>{{ $row->description }}</td>
                                <td>{{ $row->closing_date }}</td>
                                <td>
                                    <form action="{{ route('programme.destroy', $row->id) }}" method="post">
                                        <ul class="d-flex">
                                            <li class="mr-3"><a href="{{ route('programme.edit', $row->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                            @csrf
                                            @method('delete')
                                            <li><button type="submit" class="text-danger btn-submit" onclick="return confirm('Are you sure want to delete this data?')" ><i class="ti-trash"></i></button></li>
                                        </ul>
                                    </form>
                                </td>
                            </tr>
                            @empty 
                            <tr>
                                <td colspan="6">Data programmes are not available</td>
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