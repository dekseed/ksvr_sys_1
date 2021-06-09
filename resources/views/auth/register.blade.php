@extends('layouts.register')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
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
                    <div class="col-xl-8 col-12 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{ asset('images') }}/KSVRNewVersion.png" alt="branding logo" width="300" class="ml-2 mr-5">
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
                                                <form method="POST" action="{{ route('register') }}" novalidate>
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputName">คำนำหน้า</label>
                                                            <select class="select2 form-control" data-validation-required-message="เลือกคำนำหน้า" name="title_name_id"  required>
                                                                <option value="">คำนำหน้า</option>
                                                                <option value="1" @if (old('title_name_id') == "1") {{ 'selected' }} @endif>นาย</option>
                                                                <option value="2" @if (old('title_name_id') == "2") {{ 'selected' }} @endif>นาง</option>
                                                                <option value="3" @if (old('title_name_id') == "3") {{ 'selected' }} @endif>นางสาว</option>
                                                                <option value="4" @if (old('title_name_id') == "4") {{ 'selected' }} @endif>พันเอก</option>
                                                                <option value="5" @if (old('title_name_id') == "5") {{ 'selected' }} @endif>พันเอกหญิง</option>
                                                                <option value="6" @if (old('title_name_id') == "6") {{ 'selected' }} @endif>พันโท</option>
                                                                <option value="7" @if (old('title_name_id') == "7") {{ 'selected' }} @endif>พันโทหญิง</option>
                                                                <option value="8" @if (old('title_name_id') == "8") {{ 'selected' }} @endif>พันตรี</option>
                                                                <option value="9" @if (old('title_name_id') == "9") {{ 'selected' }} @endif>พันตรีหญิง</option>
                                                                <option value="10" @if (old('title_name_id') == "10") {{ 'selected' }} @endif>ร้อยเอก</option>
                                                                <option value="11" @if (old('title_name_id') == "11") {{ 'selected' }} @endif>ร้อยเอกหญิง</option>
                                                                <option value="12" @if (old('title_name_id') == "12") {{ 'selected' }} @endif>ร้อยโท</option>
                                                                <option value="13" @if (old('title_name_id') == "13") {{ 'selected' }} @endif>ร้อยโทหญิง</option>
                                                                <option value="14" @if (old('title_name_id') == "14") {{ 'selected' }} @endif>ร้อยตรี</option>
                                                                <option value="15" @if (old('title_name_id') == "15") {{ 'selected' }} @endif>ร้อยตรีหญิง</option>
                                                                <option value="16" @if (old('title_name_id') == "16") {{ 'selected' }} @endif>จ่าสิบเอก</option>
                                                                <option value="17" @if (old('title_name_id') == "17") {{ 'selected' }} @endif>จ่าสิบเอกหญิง</option>
                                                                <option value="18" @if (old('title_name_id') == "18") {{ 'selected' }} @endif>จ่าสิบโท</option>
                                                                <option value="19" @if (old('title_name_id') == "19") {{ 'selected' }} @endif>จ่าสิบโทหญิง</option>
                                                                <option value="20" @if (old('title_name_id') == "20") {{ 'selected' }} @endif>จ่าสิบตรี</option>
                                                                <option value="21" @if (old('title_name_id') == "21") {{ 'selected' }} @endif>จ่าสิบตรีหญิง</option>
                                                                <option value="22" @if (old('title_name_id') == "22") {{ 'selected' }} @endif>สิบเอก</option>
                                                                <option value="23" @if (old('title_name_id') == "23") {{ 'selected' }} @endif>สิบเอกหญิง</option>
                                                                <option value="24" @if (old('title_name_id') == "24") {{ 'selected' }} @endif>สิบโท</option>
                                                                <option value="25" @if (old('title_name_id') == "25") {{ 'selected' }} @endif>สิบโทหญิง</option>
                                                                <option value="26" @if (old('title_name_id') == "26") {{ 'selected' }} @endif>สิบตรี</option>
                                                                <option value="27" @if (old('title_name_id') == "27") {{ 'selected' }} @endif>สิบตรีหญิง</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputName">ชื่อหน้า</label>
                                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="ชื่อหน้า" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" data-validation-required-message="ป้อนชื่อ" autofocus>

                                                            {{-- @error('first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror --}}
                                                        </div>


                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputName">นามสกุล</label>
                                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="นามสกุล" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" data-validation-required-message="ป้อนนามสกุล" autofocus>

                                                            {{-- @error('last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror --}}
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputName">ตำแหน่ง</label>
                                                            <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position" value="{{ old('position') }}" required autocomplete="position" data-validation-required-message="ป้อนตำแหน่ง" autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputName">แผนก</label>
                                                            <select class="select2 form-control" id="select2-array" name="department_id" data-validation-required-message="เลือกแผนก" required>
                                                                <option value="">แผนก</option>
                                                                <option value="1" @if (old('department_id') == "1") {{ 'selected' }} @endif>ทันตกรรม</option>
                                                                <option value="2" @if (old('department_id') == "2") {{ 'selected' }} @endif>ฉุกเฉิน</option>
                                                                <option value="3" @if (old('department_id') == "3") {{ 'selected' }} @endif>X-Ray</option>
                                                                <option value="4" @if (old('department_id') == "4") {{ 'selected' }} @endif>ซักรีด</option>
                                                                <option value="5" @if (old('department_id') == "5") {{ 'selected' }} @endif>ทะเบียน</option>
                                                                <option value="6" @if (old('department_id') == "6") {{ 'selected' }} @endif>หอผู้ป่วยนอก</option>
                                                                <option value="7" @if (old('department_id') == "7") {{ 'selected' }} @endif>ศูนย์ผู้ป่วยใน</option>
                                                                <option value="8" @if (old('department_id') == "8") {{ 'selected' }} @endif>เภสัชกรรม</option>
                                                                <option value="9" @if (old('department_id') == "9") {{ 'selected' }} @endif>หอผู้ป่วยใน</option>
                                                                <option value="10" @if (old('department_id') == "10") {{ 'selected' }} @endif>ศูนย์คอมพิวเตอร์</option>
                                                                <option value="11" @if (old('department_id') == "11") {{ 'selected' }} @endif>องค์พยาบาล</option>
                                                                <option value="12" @if (old('department_id') == "12") {{ 'selected' }} @endif>ห้องผ่าตัด</option>
                                                                <option value="13" @if (old('department_id') == "13") {{ 'selected' }} @endif>กายภาพบำบัด</option>
                                                                <option value="14" @if (old('department_id') == "14") {{ 'selected' }} @endif>ฝังเข็ม</option>
                                                                <option value="15" @if (old('department_id') == "15") {{ 'selected' }} @endif>แพทย์แผนไทย</option>
                                                                <option value="16" @if (old('department_id') == "16") {{ 'selected' }} @endif>สปา</option>
                                                                <option value="17" @if (old('department_id') == "17") {{ 'selected' }} @endif>LAB</option>
                                                                <option value="18" @if (old('department_id') == "18") {{ 'selected' }} @endif>จ่ายกลาง</option>
                                                                <option value="19" @if (old('department_id') == "19") {{ 'selected' }} @endif>สูทกรรม</option>
                                                                <option value="20" @if (old('department_id') == "20") {{ 'selected' }} @endif>ซักรีด</option>
                                                                <option value="21" @if (old('department_id') == "21") {{ 'selected' }} @endif>ศูนย์เด็กเล็กฯ</option>
                                                                <option value="22" @if (old('department_id') == "22") {{ 'selected' }} @endif>ศูนย์ส่งเสริมสุขภาพฯ</option>
                                                                <option value="23" @if (old('department_id') == "23") {{ 'selected' }} @endif>ส่งกำลังและบริการ</option>
                                                                <option value="24" @if (old('department_id') == "24") {{ 'selected' }} @endif>หมวดพลเสนารักษ์</option>
                                                                <option value="25" @if (old('department_id') == "25") {{ 'selected' }} @endif>ธุรการ</option>
                                                                <option value="26" @if (old('department_id') == "26") {{ 'selected' }} @endif>การเงิน</option>
                                                                <option value="27" @if (old('department_id') == "27") {{ 'selected' }} @endif>พลาธิการ</option>
                                                                <option value="28" @if (old('department_id') == "28") {{ 'selected' }} @endif>จุดคัดกรองฯ</option>
                                                                <option value="29" @if (old('department_id') == "29") {{ 'selected' }} @endif>ยุทธโยธา</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputEmail">อีเมล์</label>
                                                        <input id="email" type="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email') }}" required autocomplete="email" data-validation-required-message="ป้อนที่อยู่อีเมล์">
                                                        {{-- @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror --}}
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-label-group">
                                                        <div class="controls">
                                                            <input type="password" name="password" id="account-new-password" class="form-control" placeholder="รหัสผ่านใหม่" required data-validation-required-message="รหัสผ่านใหม่" minlength="6">
                                                        </div>
                                                        <label for="inputPassword">รหัสผ่าน</label>
                                                        <p class="text-danger font-small-2">ตัวอักษรหรือตัวเลขอย่างน้อย 6 ตัวขึ้นไป</p>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <div class="controls">
                                                            <input type="password" name="password_confirmation" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="ยืนยันรหัสผ่านใหม่" data-validation-required-message="ต้องยืนยันพาสเวิร์ดใหม่" minlength="6">
                                                        </div>
                                                        <label for="inputConfPassword">ยืนยันรหัสผ่าน</label>
                                                    </div> --}}

                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-new-password">รหัสผ่าน</label>
                                                                <input type="password" name="password" id="account-new-password" class="form-control" placeholder="รหัสผ่าน" required data-validation-required-message="รหัสผ่าน" minlength="6">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-retype-new-password">ยืนยันรหัสผ่าน</label>
                                                                <input type="password" name="password_confirmation" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="ยืนยันรหัสผ่าน" data-validation-required-message="ต้องยืนยันรหัสผ่าน" minlength="6">
                                                            </div>
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
                                                <a href="{{ route('login') }}" class="btn btn-outline-success float-left btn-inline mb-50 mr-1">กลับ</a>
                                                    <button type="submit" class="btn bg-gradient-success float-right btn-inline mb-50">สร้างบัญชี</a>
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
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jqBootstrapValidation.js"></script>

    <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->
@endsection
