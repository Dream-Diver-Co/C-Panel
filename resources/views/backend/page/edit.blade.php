@extends('backend.layouts.master')
@section('content')

  <div class="card" style="height:100%">
    <div class="card-header">
        <div class="text-dark">Page</div>
    </div>
    <div class="card-body">
      {{-- <a href="{{ route('page.create') }}" class="btn btn-primary">Add New</a> --}}
      <form action="{{ route('page.update',$data->id) }}" method="POST">
        @csrf
        <div class="form-group">
          <label class="text-dark" for="title">Title</label>
          <input type="text" class="form-control" id="title" value="{{ $data->title }}" name="title">
        </div>
        <div class="form-group">
            <label class="text-dark" for="type">Type</label>
            <select class="form-control" name="type">
                <option value="about-us" @if($data->type =='about-us') selected @endif>About Us</option>
                <option value="contact-us" @if($data->type =='contact-us') selected @endif>Contact Us</option>
            </select>
          </div>

          <div class="form-group">
            <label class="text-dark" >Description</label>
            <textarea name="description" id="summernote" class="form-control" rows="5">{{ $data->description }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

@endsection