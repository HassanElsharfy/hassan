<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active"
                        data-menu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">موقع العرض</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-sm"
                            src="{{ asset('assets/media/svg/flags/' . (request()->locale === 'ar' ? '008-saudi-arabia.svg' : '226-united-states.svg')) }}"
                            alt="" />
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item {{ request()->locale === 'ar' ? 'active' : '' }}">
                            <a href="{{ route(request()->route()->getName(),'ar') }}" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('assets/media/svg/flags/008-saudi-arabia.svg') }}"
                                        alt="العربية" />
                                </span>
                                <span class="navi-text">العربية</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item {{ request()->locale === 'en' ? 'active' : '' }}">
                            <a href="{{ route(request()->route()->getName(),'en') }}" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}"
                                        alt="English" />
                                </span>
                                <span class="navi-text">English</span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
