@extends('admin.layouts.app')

@section('title')
Universities
@endsection


@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-12 mt-5">
            
            @include('admin.layouts.flash')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Universities</h4>
                    <a href="{{ route('university.create') }}" class="btn btn-sm btn-primary">Add</a>
                    <br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>University Name</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($universities as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->university_name }}</td>
                                
                                <td>
                                    <form action="{{ route('university.destroy', $row->id) }}" method="post">
                                        <ul class="d-flex">
                                            <li class="mr-3"><a href="{{ route('university.edit', $row->id) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                            @csrf
                                            @method('delete')
                                            <li><button type="submit" class="text-danger btn-submit" onclick="return confirm('Are you sure want to delete this data?')" ><i class="ti-trash"></i></button></li>
                                        </ul>
                                    </form>
                                </td>
                            </tr>
                            @empty 
                            <tr>
                                <td colspan="2">Data universities not available</td>
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