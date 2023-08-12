@extends('layout.master')

@section('title')
    تعديل sliders
@endsection

@section('page_title')
    MoTor
@endsection

@section('sub_main')
    sliders
@endsection

@section('sub_title')
    تعديل sliders
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
                    {{-- <form action="{{ route('slider.update', $slider->id) }}" method="post" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') --}}
                        <form method="POST" action="{{ route('slider.update', ['locale' => request()->locale, 'slider' => $slider->id]) }}"
                            class="needs-validation"
                            >
                            @csrf
                            @method('PUT')

                        <div class="card-body">
                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>main_title:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ old('main_title', $slider->main_title)}}"
                                            name="main_title" />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label>description:</label>
                                    <input type="text" class="form-control" value="{{ old('description',$slider->description) }}"
                                        name="description" />
                                </div>
                                <div class="col-lg-4">
                                    <label>youtube_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ old('youtube_link',$slider->youtube_link) }}"
                                            name="youtube_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>instagram_link:</label>
                                    <input type="text" class="form-control" value="{{ old('instagram_link',$slider->instagram_link) }}"
                                        name="instagram_link" />
                                </div>
                                <div class="col-lg-4">
                                    <label>maintenance_button:</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" value="{{old('maintenance_button',$slider->maintenance_button) }}"
                                            name="maintenance_button" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>maintenance_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ old('maintenance_link',$slider->maintenance_link) }}"
                                            name="maintenance_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>materials_button:</label>
                                    <input type="text" class="form-control" value="{{ old('materials_button',$slider->materials_button) }}"
                                        name="materials_button" id="materials_button" />
                                </div>
                                <div class="col-lg-4">
                                    <label>materials_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ old('materials_link',$slider->materials_link) }}"
                                            name="materials_link" id="materials_link" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>question:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{old('question',$slider->question) }}"
                                            name="question"  id="question"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>whatsapp_link:</label>
                                    <input type="text" class="form-control" value="{{ old('whatsapp_link',$slider->whatsapp_link) }}"
                                        name="whatsapp_link" id="whatsapp_link" />
                                </div>
                                <div class="col-lg-4">
                                    <label>tiktok_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{old ('tiktok_link',$slider->tiktok_link) }}"
                                            name="tiktok_link"  id="tiktok_link"/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>snapcaht_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ old('snapcaht_link',$slider->snapcaht_link) }}"
                                            name="snapcaht_link" id="snapcaht_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>background:</label>
                                    <input type="file" class="form-control" name="background" />
                                    @if ($slider->background)
                                        <img src="{{ asset('filebackgrounds/' .old('background',$slider->background)) }}"
                                            alt="Background Image" width="100" height="100">
                                    @else
                                        <p>No background image found</p>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label>logo:</label>
                                    <input type="file" class="form-control" name="logo" />
                                    @if ($slider->logo)
                                        <img src="{{ asset('filelogos/' . old('logo',$slider->logo)) }}" alt="Logo Image"
                                            width="100" height="100">
                                    @else
                                        <p>No logo image found</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                        {{-- <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="submit" class="mr-2 btn btn-success">تعديل</button>
                                    <button type="reset" class="mr-2 btn btn-danger">إلغاء</button>
                                    <a href="{{ url('ar/slider') }}" class="mr-2 btn btn-info">عرض البيانات</a>
                                </div>
                            </div>
                        </div> --}}

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
