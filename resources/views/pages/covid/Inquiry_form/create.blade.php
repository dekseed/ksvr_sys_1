@extends('layouts.covid')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">

    <style>

        .autocomplete-content{margin-top:0;margin-bottom:0}
        .input-field .prefix ~ .autocomplete-content{margin-left:3rem;width:92%;width:calc(100% - 3rem)}

        .autocomplete-content li .highlight{color:#444}
        .autocomplete-content li img{height:40px;width:40px;margin:5px 15px}
        .dropdown-content{background-color:#fff;margin:0;display:none;min-width:100px;overflow-y:auto;opacity:0;position:absolute;left:0;top:0;z-index:9999;-webkit-transform-origin:0 0;transform-origin:0 0}.dropdown-content:focus{outline:0}.dropdown-content li{clear:both;color:rgba(0,0,0,0.87);cursor:pointer;min-height:50px;line-height:1.5rem;width:100%;text-align:left}.dropdown-content li:hover,.dropdown-content li.active{background-color:#eee}.dropdown-content li:focus{outline:none}.dropdown-content li.divider{min-height:0;height:1px}.dropdown-content li>a,.dropdown-content li>span{font-size:16px;color:#26a69a;display:block;line-height:22px;padding:14px 16px}.dropdown-content li>span>label{top:1px;left:0;height:18px}.dropdown-content li>a>i{height:inherit;line-height:inherit;float:left;margin:0 24px 0 0;width:24px}body.keyboard-focused .dropdown-content li:focus{background-color:#dadada}.input-field.col .dropdown-content [type="checkbox"]+label{top:1px;left:0;height:18px;-webkit-transform:none;transform:none}.dropdown-trigger{cursor:pointer}
        body.keyboard-focused .select-dropdown.dropdown-content li:focus{background-color:rgba(0,0,0,0.08)}.select-dropdown.dropdown-content li:hover{background-color:rgba(0,0,0,0.08)}.select-dropdown.dropdown-content li.selected{background-color:rgba(0,0,0,0.03)}
    </style>
@endsection

    @section('content')

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                    <div class="content-header text-center">
                        <div class="col-md-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="col-12">
                                    <h2 class="content-header-title mb-0">แบบสอบสวนผู้ป่วยโรคติดเชื้อไวรัสโคโรนา 2019
                                        <br>โรงพยาบาลค่ายกฤษณ์สีวะรา
                                    </h2>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="content-body">
                        <section id="validation">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>ขัดข้อง :</strong>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>
                                                                    {{ $error }}
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                @endif
                                                <form id="steps-validation" action="{{ route('InquiryFormCovid.store') }}"
                                                    class="steps-validation wizard-circle" method="POST">
                                                    {{ csrf_field() }}

                                                    @include('pages.covid.Inquiry_form.include_form.num1')
                                                    @include('pages.covid.Inquiry_form.include_form.num2')
                                                    @include('pages.covid.Inquiry_form.include_form.num3')
                                                    @include('pages.covid.Inquiry_form.include_form.num4')
                                                    @include('pages.covid.Inquiry_form.include_form.num5')

                                                    </fieldset>

                                                </form>
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript">

    function showDiv(select){
        if(select.value==1){
        document.getElementById('medical_personnel').style.display = "block";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==2){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "block";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==3){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "block";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==4){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "block";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==5){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "block";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else{
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    }
   }
   function unit(select){
        if(select.value==1){
        document.getElementById('military_unit1').style.display = "block";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==2){
        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "block";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==3){
        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "block";
    }
    else {
        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    }
}

</script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>

<script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
<script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets') }}/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page JS-->

@endsection
