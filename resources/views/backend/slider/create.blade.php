@extends('backend.layouts.master')
@section('content')


    <div class="card" style="height:100%">
      <div class="card-body">
        <h4 class="card-title">Slider Create</h4>
        <form class="forms-sample" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="heading" class="col-sm-3 col-form-label text-black text-end">Heading Text</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="heading" name="heading" >
            </div>
          </div>
          <div class="form-group row">
            <label for="small-text" class="col-sm-3 col-form-label text-black text-end">Small Text</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="small-text" name="small_text">
            </div>
          </div>
          <div class="form-group row">
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