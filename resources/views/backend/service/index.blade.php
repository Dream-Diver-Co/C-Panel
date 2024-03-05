@extends('backend.layouts.master')
@section('content')

  <div class="card" style="height:100%">
    <div class="card-header">
        <div class="text-dark">Services</div>
    </div>
    <div class="card-body">
        <a href="{{ route('service.create') }}" class="btn btn-primary">Add New</a>
        @include('backend.partials.message')
      <table class="table table-bordered table-responsive ">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Note</th>
                <th>Image</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $row )
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->title}}</td>
                    <td><p>{!! Illuminate\Support\Str::limit($row->note, 500) !!}</p></td>
                    <td><img src="{{ asset('backend/img/service/'.$row->image ) }}" alt="service"></td>
                    <td><img src="{{ asset('backend/img/service/'.$row->icon ) }}" alt="service"></td>
                    <td>
                        <a href="{{ route('service.edit',$row->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('service.delete',$row->id) }}" class="btn btn-danger">Delete</a>       
                    </td>
                </tr>

                
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection