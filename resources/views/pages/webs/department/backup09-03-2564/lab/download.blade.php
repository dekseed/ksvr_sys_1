@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')

 {{-- quickLinks --}}
	@include('_includes.sidebar.quickLinks')
   {{-- quickLinks --}}
   <!--//quick links-->
	<div class="page-content">
      <!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
                        <a href="{{route('welcome')}}">หน้าแรก</a>
                        <a href="#">บริการของเรา</a>
                        <a href="#">แผนกพยาธิวิทยา</a>
						<span>เอกสารคุณภาพ</span>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->
      <!--section-->
		<div class="section page-content-first">
			<div class="container mt-6">
				<div class="row">

               <!-- sidebar -->
					@include('_includes.sidebar.department')
               <!-- sidebar -->
               
               <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                  <div class="container">
                     <div class="text-center mb-2  mb-md-3 mb-lg-4">
                        <div class="h-sub theme-color">แผนกพยาธิวิทยา</div>
                        <h1>เอกสารคุณภาพ</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('images') }}/0001.jpg" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                        <h3>เอกสารคุณภาพ</h3>
                        <div class="h-decor"></div>
							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							<div class="mt-1"></div>
							<ul class="marker-list-md-line">
                                <li><a href="{{ asset('files/LAB/WI-LAB-004_uric_acid.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Uric acid</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-011_Calcium.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Calcium</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-012_phosphorus.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Phosphorus</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-013_Mg.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Magnesium</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-014_TP.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Total protein</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-015_Albumin.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Albumin</a></li>
                                <li><a href="{{ asset('files/LAB/264091_ค่ายกฤษณ์สีวะรา_เอกสารWI-LAB-001_GLUCOSE_13ธค62.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ GLUCOSE</a></li>
                                <li><a href="{{ asset('files/LAB/WI_EZCR_แก้ไขupdate 26-02-20.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Creatinine</a></li>
                                <li><a href="{{ asset('files/LAB/WI_ALPI.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ ALKALINE PHOSPHATASE (ALP)</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-005Cholesterol.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Cholesterol</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-006TGL.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Triglyceride</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-007_HDL.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ HDL</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-008LDL.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ LDL-CHOLESTEROL</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-016_Total_bilirubin.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Total bilirubin</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-017_Direct_bilirubin.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Direct bilirubin</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-018_AST.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ ASPARTATE AMINOTRANSFERASE (AST)</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-019_ALT.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ ALT(Alanine aminotransferase)</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-022_Iron.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ Iron</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-049_Urine_analysis.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจวิเคราะห์ปัสสาวะ</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-051_การตรวจ_Pregnancy_test.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจการตั้งครรภ์จากปัสสาวะ</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-064_RPR.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การตรวจ RPR</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-089_การย้อมสีเพื่อวินิจฉัยโรคติดเชื้อวัณโรค.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การย้อมสีเพื่อวินิจฉัยโรคติดเชื้อวัณโรค</a></li>
                                <li><a href="{{ asset('files/LAB/WI-LAB-การย้อมเเกรม.pdf') }}" target="_blank">วิธีปฏิบัติงาน เรื่อง การย้อมสีเเกรมเพื่อวินิจฉัยโรคติดเชื้อจากแบคทีเรีย</a></li>
                                <li><a href="{{ asset('files/LAB/คู่มือผู้ใช้บริการ_update_21.04.63.pdf') }}" target="_blank">คู่มือการผู้ใช้บริการและเก็บสิ่งตรวจทางห้องปฏิบัติการทางการแพทย์</a></li>
              
                     		</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->

@endsection
@section('scripts')

@endsection