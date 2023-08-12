@extends('layout.master')

@section('title')
    اضافة sliders
@endsection

@section('page_title')
    MoTor
@endsection

@section('sub_main')
    sliders
@endsection

@section('sub_title')
    اضافة sliders
@endsection

@section('css')
    <style>
        input {
            border: 1px solid #d5c1ff !important;
        }

        .btn.btn-light:hover:not(.btn-text):not(:disabled):not(.disabled),
        .btn.btn-light:focus:not(.btn-text),
        .btn.btn-light.focus:not(.btn-text) {
            border: 1px solid #d5c1ff !important;

        }

        .btn.dropdown-toggle.btn-light.bs-placeholder {
            border: 1px solid #d5c1ff !important;

        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <!--begin::Form-->
                    <form action="{{ route('slider.store', request()->locale) }}" method="post" class="form needs-validation "
                        novalidate enctype="multipart/form-data" id="kt_form">
                        @csrf
                        {!! csrf_field() !!}

                        <div class="card-body">
                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label> {{ __('main_title') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" العنوان الرئيسي بالعربي"
                                            name="ar[main_title]" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label> {{ __('main_title') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="main_title"
                                            name="en[main_title]" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('youtube_link') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="youtube_link"
                                            name="youtube_link" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>{{ __('description') }}</label>
                                    <input type="text" class="form-control" placeholder="الوصف بالعربي"
                                        name="ar[description]" />
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('description') }}</label>
                                    <input type="text" class="form-control" placeholder=" description"
                                        name="en[description]" />
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('instagram_link') }}</label>
                                    <input type="text" class="form-control" placeholder=" instagram_link"
                                        name="instagram_link" />
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>{{ __('maintenance_button') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="زر الصيانة بالعربي"
                                            name="ar[maintenance_button]" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('maintenance_button') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="maintenance_button"
                                            name="en[maintenance_button]" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('maintenance_link') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" maintenance_link"
                                            name="maintenance_link" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>{{ __('materials_button') }}</label>
                                    <input type="text" class="form-control" placeholder="زر الموارد بالعربي"
                                        name="ar[materials_button]" />
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('materials_button') }}</label>
                                    <input type="text" class="form-control" placeholder="materials_button"
                                        name="en[materials_button]" />
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('materials_link') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="materials_link"
                                            name="materials_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>{{ __('whatsapp_link') }}</label>
                                    <input type="text" class="form-control" placeholder=" whatsapp_link"
                                        name="whatsapp_link" />
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('tiktok_link') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="tiktok_link"
                                            name="tiktok_link" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('snapcaht_link') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" snapcaht_link"
                                            name="snapcaht_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>{{ __('background') }}</label>
                                    <input type="file" class="form-control" placeholder=" background"
                                        name="background" />
                                </div>
                                <div class="col-lg-4">
                                    <label>{{ __('logo') }}</label>
                                    <input type="file" class="form-control" placeholder=" logo" name="logo" />
                                </div>

                                <div class="col-lg-2">
                                    <label>{{ __('question') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" السؤال بالعربي"
                                            name="ar[question]" />
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label>{{ __('question') }}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" question"
                                            name="en[question]" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="submit" class="mr-2 btn btn-success">حفظ</button>
                                    <button type="reset" class="mr-2 btn btn-danger">إلغاء</button>
                                    <a href="{{ url('ar/slider') }}" class="mr-2 btn btn-info">عرض البيانات</a>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"></script>
@endsection
