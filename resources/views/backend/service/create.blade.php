@extends('backend.layouts.master')
@section('content')


    <div class="card" style="height:100%">
      <div class="card-body">
        <h4 class="card-title">Service Create</h4>
        <form class="forms-sample" method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label text-black text-end">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" >
            </div>
          </div>
          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label text-black text-end">Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="image" name="image">
            </div>
          </div>
          <div class="form-group row">
            <label for="icon" class="col-sm-2 col-form-label text-black text-end">Icon</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="icon" name="icon">
            </div>
          </div>
          <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label text-black text-end">Note</label>
            <div class="col-sm-10">
              <textarea name="note" id="summernote" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="footer-logo" class="col-sm-3 col-form-label text-black text-end"></label>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
          </div>
         
        </form>
      </div>
    </div>
@endsection