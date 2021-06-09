@extends('layouts.welcome')

@section('styles')

@endsection

@section('content')
    {{-- quickLinks --}}
	@include('_includes.sidebar.quickLinks')
	{{-- quickLinks --}}
	<div class="page-content">

        <div class="page-content">
            <!--section-->
            <div class="section mt-0">
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <div class="breadcrumbs">
                            <a href="index.html">หน้าแรก</a>
                            <span>ประกาศจัดศื้อจัดจ้าง</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section page-content-first">
                <div class="container">
                    <div class="text-center mb-2 mb-md-3">
                        <div class="h-sub theme-color">ข่าวสารและกิจกรรม</div>
                        <h1>ประกาศจัดซื้อจัดจ้าง</h1>
                        <div class="h-decor"></div>
                    </div>
                </div>
                <div class="container">

							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							<div class="mt-1"></div>
							<ul class="marker-list-md-line">
                                @foreach ($tenders as $tender)
                                <li><a href="{{ asset('files/tender/'.$tender->file) }}" target="_blank">{{$tender->description}} ประกาศ ณ วันที่ {{DateThai(date('d-m-Y', strtotime($tender->date)))}} {{--ประกาศ ณ วันที่ {{ date('j F y', strtotime($tender->updated_at))}}--}} </a></li>
                                @endforeach
                            </ul>
                </div>
            </div>
        <!--//section-->
        </div>
    </div>

</div>

@endsection
