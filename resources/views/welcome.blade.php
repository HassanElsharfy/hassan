@extends('layout.master')

@section('title')
    Motor
@endsection

@section('page_title')
    لوحة التحكم
@endsection
@section('sub_main')
    الرئيسة
@endsection
@section('sub_title')
	Motor
@endsection

@section('css')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endsection


@section('content')
	<!--begin::Container-->
	<div class="container">
		<!--begin::Dashboard-->

		<!--end::Dashboard-->
	</div>
	<!--end::Container-->
@endsection

@section('scripts')

@endsection
