@extends('layouts.home')
@section('styles')


@endsection
@section('content')

<div id="app">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                 <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">สิทธิ์การใช้งาน</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">จัดการข้อมูลสมาชิก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('permission_role') }}">สิทธิ์การใช้งาน</a>
                                    </li>
                                    <li class="breadcrumb-item active">บทบาทหน้าที่
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="card-header mb-1">
                                                    <h2>บทบาทหน้าที่</h2>
                                                </div>
                                                @if(Session::has('message'))
                                                    <div class="alert alert-primary">
                                                        <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                                    </div>

                                                @endif
                            <div class="card-header">
                                <blockquote class="blockquote pl-1 border-left-primary border-left-3">
                                    <h3 class="card-title">{{$role->display_name}} <em>({{$role->name}})</em></h3>
                                    <p class="m-l-15">{{$role->description}}</p>
                                </blockquote>
                            </div>
                            <h4 class="form-section"><i class="ft-mail"></i> สิทธิ์การใช้งานระบบ</h4>
                            <ul>
                                @foreach ($role->permissions as $r)
                                <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="card-footer text-muted">
                            <div class="right">
                            <a href="{{route('permission_role')}}" class="btn btn-outline-warning mr-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
                            <a href="{{route('roles.edit', $role->id)}}" class="btn btn-outline-primary"><i class="fa fa-user-plus m-r-10"></i> แก้ไข</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
</div>

@endsection
@section('scripts')
{{-- <script>
    var app = new Vue({
        el: '#app',
        data: {
            auto_password: true
        }
    });
</script> --}}

@endsection

