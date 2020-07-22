@extends('layouts.check_up')

@section('styles')

@endsection

@section('content')


 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="content-header col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title text-center mb-0">แบบสำรวจภาวะสุขภาพประจำปี 2563</h2>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="container">
                     
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">แบบสำรวจภาวะสุขภาพประจำปี 2563</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mt-3">
                                        <h2 class="danger">ส่งข้อมูลเรียบร้อย..!</h2>
                                        <a href="{{ route('check_up-user_pol.index') }}" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">กลับ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->

               

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('scripts')

@endsection
