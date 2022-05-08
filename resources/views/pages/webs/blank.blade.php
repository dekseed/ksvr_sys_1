@extends('layouts.register')

@section('styles')
<style>
.img-fluid2 {
    max-width: 100%;

    height: auto;
}

</style>


@endsection

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- maintenance -->
            <section class="row flexbox-container">
                <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="{{ asset('images') }}/pic1.jpg" class="img-fluid2 align-self-center">
                                <a class="btn btn-warning btn-lg mt-1 mr-1" href="https://docs.google.com/forms/d/e/1FAIpQLSdV0hKRU8NLbUzDBQa_ZQGvwFYYbAowiOFb-FGpCQ62UlcFZw/viewform?usp=pp_url" target="_blank">ลงนามถวายพระพร</a>
                                <a class="btn btn-warning btn-lg mt-1" href="{{ route('welcome') }}">เข้าสู่เว็บไซต์ รพ.ค่ายกฤษณ์สีวะรา</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- maintenance end -->

        </div>
    </div>
</div>

@endsection
@section('scripts')

@endsection
