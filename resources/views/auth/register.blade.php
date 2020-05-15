@extends('layouts.register')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">

@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{ asset('images') }}/logo.png" alt="branding logo" width="300" class="ml-3 mr-5">
                                    {{-- <img src="{{ asset('app-assets') }}/images/pages/register.jpg" alt="branding logo"> --}}
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">สร้างบัญชี</h4>
                                            </div>
                                        </div>
                                        {{-- <p class="px-2">Fill the below form to create a new account.</p> --}}
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <select class="select2-data-array-title_name form-control"  name="title_name_id"></select>
                                                        <label for="inputName">คำนำหน้า</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="ชื่อ - นามสกุล" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        <label for="inputName">ชื่อ - นามสกุล</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>

                                                            @error('position')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        <label for="inputName">ตำแหน่ง</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <select class="select2-data-array-dep form-control" id="select2-array" name="department_id" required></select>
                                                        <label for="inputName">แผนก</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@example.com" value="{{ old('email') }}" required autocomplete="email">

                                                        <label for="inputEmail">อีเมล์</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required autocomplete="new-password">
                                                        <label for="inputPassword">รหัสผ่าน</label>
                                                        <p class="text-danger font-small-2">ตัวอักษรหรือตัวเลขอย่างน้อย 6 ตัวขึ้นไป</p>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input id="password-confirm" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" name="password_confirmation" required autocomplete="new-password">
                                                        <label for="inputConfPassword">ยืนยันรหัสผ่าน</label>
                                                    </div>
                                                    {{-- <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> I accept the terms & conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div> --}}
                                                <a href="{{ route('login') }}" class="btn btn-outline-primary float-left btn-inline mb-50">กลับ</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">สร้างบัญชี</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->
@endsection
