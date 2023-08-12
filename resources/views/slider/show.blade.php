@extends('layout.master')

@section('title')
    عرض sliders
@endsection

@section('page_title')
    لوحة التحكم
@endsection
@section('sub_main')
    قائمة sliders
@endsection
@section('sub_title')
    صفحة العرض
@endsection
@section('css')
@endsection

@section('content')
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 mt-5">
                <h3 class="card-title align-items-start flex-column text-dark">
                    <span class="font-weight-bolder text-dark">{{ __('slider') }} رقم {{ $slider->id }}</span>
                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                        <div class="">
                            <img src="{{ asset('filelogos') }}/{{ $slider->logo }}" alt="{{ $slider->main_title }}"
                                width="50%" height="100%">
                        </div>
                    </div>
                </h3>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left"
                        data-original-title="Quick actions">
                        <a href="#"
                            class="btn btn-light-danger btn-sm font-weight-normal font-size-sm dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                        <span class="navi-text">New Group</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                        <span class="navi-text">Contacts</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                        <span class="navi-text">Groups</span>
                                        <span class="navi-link-badge">
                                            <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                        <span class="navi-text">Calls</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                        <span class="navi-text">Settings</span>
                                    </a>
                                </li>

                                <li class="navi-separator my-3"></li>

                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                        <span class="navi-text">Help</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                        <span class="navi-text">Privacy</span>
                                        <span class="navi-link-badge">
                                            <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-2">
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-10">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                        <div class="">
                            <img src="{{ asset('filebackgrounds') }}/{{ $slider->background }}"
                                alt="{{ $slider->main_title }}" width="50%" height="100%">
                        </div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Section-->
                    <div class="d-flex flex-column flex-grow-1">
                        <!--begin::Title-->
                        <a href="#"
                            class="text-dark font-weight-bolder font-size-lg text-hover-primary mb-1">{{ $slider->main_title }}</a>
                        <!--end::Title-->

                        <!--begin::Desc-->
                        <span class="text-dark-50 font-weight-normal font-size-sm">
                            {{ $slider->description }}
                        </span>
                        <!--begin::Desc-->
                        <!--begin::Desc-->
                        <span class="text-dark-50 font-weight-normal font-size-sm">
                            {{ $slider->maintenance_button }}
                        </span>
                        <!--begin::Desc-->
                        <!--begin::Desc-->
                        <span class="text-dark-50 font-weight-normal font-size-sm">
                            {{ $slider->materials_button }}
                        </span>
                        <!--begin::Desc-->
                        <!--begin::Desc-->
                        <span class="text-dark-50 font-weight-normal font-size-sm">
                            {{ $slider->question }}
                        </span>
                        <!--begin::Desc-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!-- End #Hero -->
    </div>
@endsection

@section('scripts')
@endsection
