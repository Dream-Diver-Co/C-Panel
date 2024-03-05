@extends('backend.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Settings</h4>
            <form class="forms-sample" method="POST" action="{{ route('setting.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label text-black text-end">Site Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="site_name"
                            value="{{ $setting->site_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label text-black text-end">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $setting->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mobile" class="col-sm-3 col-form-label text-black text-end ">Mobile </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="mobile" name="mobile"
                            value="{{ $setting->mobile }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label text-black text-end">Phone </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ $setting->phone }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label text-black text-end">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ $setting->address }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-3 col-form-label text-black text-end">Facebook</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            value="{{ $setting->facebook }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="twitter" class="col-sm-3 col-form-label text-black text-end">Twitter</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="twitter" name="twitter"
                            value="{{ $setting->twitter }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="youtube" class="col-sm-3 col-form-label text-black text-end">Youtube</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="youtube" name="youtube"
                            value="{{ $setting->youtube }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instagram" class="col-sm-3 col-form-label text-black text-end">Instagram</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="instagram" name="instagram"
                            value="{{ $setting->instagram }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="linkedin" class="col-sm-3 col-form-label text-black text-end">Linkedin</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                            value="{{ $setting->linkedin }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="favicon" class="col-sm-3 col-form-label text-black text-end">Favicon</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="favicon" name="favicon"
                            value="{{ $setting->favicon }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="header-logo" class="col-sm-3 col-form-label text-black text-end">Header logo</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="header-logo" name="header_logo"
                            value="{{ $setting->header_logo }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="footer-logo" class="col-sm-3 col-form-label text-black text-end">Footer Logo</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" id="footer-logo" name="footer_logo"
                            value="{{ $setting->footer_logo }}">
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
