@extends('backend.layouts.master')
@section('content')


    <div class="card" style="height:100%">
      <div class="card-body">
        <h4 class="card-title">Page Create</h4>
        <form class="forms-sample" method="POST" action="{{ route('page.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label text-black text-end">Title</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="title" name="title" >
            </div>
          </div>
          <div class="form-group row">
            <div class="card-body">
            
             <label for="body" class="col-sm-3 form-label text-black text-end">Body</label>
              <div class="col-sm-6">
                <textarea class="form-control" id="body" name="body" rows="10"></textarea>
              </div>
            </div>
            {{-- end card body --}}
          </div>
          {{-- <div class="form-group row">
            <label for="button_text" class="col-sm-3 col-form-label text-black text-end">Button Text</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="button-text" name="button_text">
            </div>
          </div>
          <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label text-black text-end">Slider Image</label>
            <div class="col-sm-6">
              <input type="file" class="form-control" id="image" name="image">
            </div>
          </div> --}}
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