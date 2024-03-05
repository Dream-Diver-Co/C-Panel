@extends('backend.layouts.master')
@section('content')

  <div class="card" style="height:100%">
    <div class="card-header">
        <div class="text-dark">Page</div>
    </div>
    <div class="card-body">
      <a href="{{ route('page.create') }}" class="btn btn-primary">Add New</a>
      <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $row )
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->title}}</td>
                    {{-- <td>{!! $row->description !!}</td> --}}
                    <td>{!! Illuminate\Support\Str::limit($row->description, 500) !!}</td>
                    <td>
                        <a href="{{ route('page.edit',$row->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>

                
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection