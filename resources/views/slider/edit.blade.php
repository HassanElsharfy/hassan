@extends('layout.master')

{{-- @section('title')
    تعديل sliders
@endsection --}}

{{-- @section('page_title')
    MoTor
@endsection --}}

{{-- @section('sub_main')
    sliders
@endsection --}}

{{-- @section('sub_title')
    تعديل sliders
@endsection --}}

{{-- @section('css')
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
@endsection --}}

{{-- @section('content') --}}
    {{-- <div class="container"> --}}
        {{-- <div class="row"> --}}
            {{-- <div class="col-lg-12"> --}}
                <!--begin::Card-->
                {{-- <div class="card card-custom gutter-b example example-compact"> --}}
                    <!--begin::Form-->
                    {{-- <form action="{{ route('slider.update', $slider->id) }}" method="post" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') --}}
                          {{-- <form method="POST" action="{{ route('slider.update', ['locale' => request()->locale, 'slider' => $slider->id]) }}"
                            class="needs-validation"
                            >
                            @csrf
                            @method('PUT') --}}
                         {{-- <form method="POST" action="{{route('slider.update',['locale' => request()->locale,'id' => $slider->id])}}" class="needs-validation">
                                @csrf
                                @method('PUT') --}}

                                {{-- <form role="form" id="edit_form" action="{{ route('slider.update' , [$slider,'locale' => request()->locale]) }}" method="post" >
                                    @csrf
                                    @method('PUT') --}}


                        {{-- <div class="card-body">
                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <label>main_title:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->main_title }}"
                                            name="main_title" />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label>description:</label>
                                    <input type="text" class="form-control" value="{{ $slider->description }}"
                                        name="description" />
                                </div>
                                <div class="col-lg-4">
                                    <label>youtube_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->youtube_link }}"
                                            name="youtube_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>instagram_link:</label>
                                    <input type="text" class="form-control" value="{{ $slider->instagram_link }}"
                                        name="instagram_link" />
                                </div>
                                <div class="col-lg-4">
                                    <label>maintenance_button:</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" value="{{ $slider->maintenance_button }}"
                                            name="maintenance_button" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>maintenance_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->maintenance_link }}"
                                            name="maintenance_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>materials_button:</label>
                                    <input type="text" class="form-control" value="{{ $slider->materials_button }}"
                                        name="materials_button" />
                                </div>
                                <div class="col-lg-4">
                                    <label>materials_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->materials_link }}"
                                            name="materials_link" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>question:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->question }}"
                                            name="question" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>whatsapp_link:</label>
                                    <input type="text" class="form-control" value="{{ $slider->whatsapp_link }}"
                                        name="whatsapp_link" />
                                </div>
                                <div class="col-lg-4">
                                    <label>tiktok_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->tiktok_link }}"
                                            name="tiktok_link" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>snapcaht_link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $slider->snapcaht_link }}"
                                            name="snapcaht_link" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>background:</label>
                                    <input type="file" class="form-control" name="background" />
                                    @if ($slider->background)
                                        <img src="{{ asset('filebackgrounds/' . $slider->background) }}"
                                            alt="Background Image" width="100" height="100">
                                    @else
                                        <p>No background image found</p>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label>logo:</label>
                                    <input type="file" class="form-control" name="logo" />
                                    @if ($slider->logo)
                                        <img src="{{ asset('filelogos/' . $slider->logo) }}" alt="Logo Image"
                                            width="100" height="100">
                                    @else
                                        <p>No logo image found</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="submit" class="mr-2 btn btn-success">تعديل</button>
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
    </div> --}}
{{-- @endsection --}}

@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"></script>
@endsection
