@extends('backend.layouts.master')
@section('content')

  <div class="card" style="height:100%">
    <div class="card-header">
        <div class="text-dark">Slider</div>
    </div>
    <div class="card-body">
        <a href="{{ route('slider.create') }}" class="btn btn-primary">Add New</a>

      <table class="table table-bordered table-responsive ">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Heading text</th>
                <th>Small Text</th>
                <th>Button Text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $row )
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td><img src="{{ asset('backend/img/slider/'.$row->image ) }}" alt="slider"></td>
                    <td>{{ $row->heading}}</td>
                    <td>{{ $row->small_text }}</td>
                    <td>{{ $row->button_text }}</td>
                    <td>
                        <a href="{{ route('slider.edit',$row->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('slider.delete',$row->id) }}" class="btn btn-danger">Delete</a>       
                    </td>
                </tr>

                
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection