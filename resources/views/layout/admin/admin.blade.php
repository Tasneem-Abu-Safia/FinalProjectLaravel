<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <title>@yield("Headtitle")</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

    <!--begin::Global Theme Styles -->
    <link href="{{asset('metronic/assets/vendor/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!--RTL version:<link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />-->
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--RTL version:<link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

<!--RTL version:
<link href="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{asset('metronic/assets/demo/default/media/img/logo/favicon.png')}}" />
    <style>
        body,.btn.m-btn--custom,.m-subheader .m-subheader__title,.form-control,.btn,.col-form-label{
            font-family: 'Tajawal', sans-serif;
        }
        h3,h1,h2,h4,h5,h6{
            font-weight:bold !important;
        }
        .form-control{
            padding:0.75rem 1.15rem;
        }
        .col-form-label,.form-control-label
        {
            font-size: 16px !important;
        }
        .m-radio
        {
            font-size: 14px !important;
        }
        hr{
            height:0px !important;
            border:none;
            margin-top:25px;
            border-bottom:1px solid #ebedf2;

        }

        .my-active span {
            background-color: #00c5dc !important;
            color: white !important;
            border-color: #00c5dc !important;
        }

        .fade {
            opacity: 1;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }

        .sorting {
            text-align: center;
        }

        th {
            text-align: right !important;
        }

        .m-radio, .m-checkbox {
            margin-bottom: 0px !important;
        }

        select.form-control {
            padding-top: 5px;
        }

        .custom-arrow-style {
            right: auto !important;
            left: 13px !important;
        }
    </style>
    @yield("css")
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">

                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Header Menu Toggler
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a> -->

                            <!-- END -->

                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div id="m_header_menu"
                         class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                    </div>

                    <!-- END: Horizontal Menu -->

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">

                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-topbar__userpic">
                                            <img src="{{asset('metronic/assets/app/media/img/users/user.png')}}" alt="">
                                    </span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                    <span
                                        class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust custom-arrow-style"
                                        style=""></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center"
                                                 style="background: url({{asset('metronic/assets/app/media/img/misc/notification_bg.jpg')}});
                                                     background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img
                                                            src="{{asset('metronic/assets/app/media/img/users/user.png')}}"
                                                            class="rounded m--marginless" alt="" width="20px"/>
                                                    </div>
                                                    <div class="m-card-user__details">
                                                    <span
                                                        class="m-card-user__name m--font-weight-500"><h5>Admin</h5></span>
                                                        <a href="" onclick="event.preventDefault(); "
                                                           class="m-card-user__email m--font-weight-300 m-link">
                                                            <h5>Admin@gmail.com</h5></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
                                                                <span class="m-nav__link-wrap">
                                                                    <span class="m-nav__link-text"><h5>Profile </h5></span>
                                                                </span>
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span
                                                                    class="m-nav__link-text"><h5>Messages</h5></span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span
                                                                    class="m-nav__link-text"><h5>change Password</h5></span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <a  href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault(); this.closest('form').submit();"
                                                                   class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                    <h6>Log out</h6>
                                                                </a>

                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>


<!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
                class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                 m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                            href="javascript:" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-shopping-basket "></i>
                            <span class="m-menu__link-text">
                        <h4>Categories</h4>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">

                                <li class="m-menu__item " aria-haspopup="true"><a href='{{URL('admin/categories/create')}}'
                                                                                  class="m-menu__link ">
                                        <i class="m-menu__link-icon flaticon-add-circular-button "><span></span></i>
                                        <span class="m-menu__link-text"><h5>Add Categories</h5></span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href='{{URL('admin/categories')}}'
                                                                                  class="m-menu__link "><i
                                            class="m-menu__link-icon flaticon-eye"><span></span></i><span
                                            class="m-menu__link-text"><h5>Show Categories</h5></span></a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                            href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-home-2 "></i><span class="m-menu__link-text">
                    <h4>Stores</h4>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">

                                <li class="m-menu__item " aria-haspopup="true"><a href='{{URL('admin/stores/create')}}'
                                                                                  class="m-menu__link "><i
                                            class="m-menu__link-icon flaticon-add-circular-button "><span></span></i><span
                                            class="m-menu__link-text"><h5>Add store</h5></span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href='{{URL('admin/stores')}}'
                                                                                  class="m-menu__link "><i
                                            class="m-menu__link-icon flaticon-eye"><span></span></i><span
                                            class="m-menu__link-text"><h5>Show Stores</h5></span></a></li>


                            </ul>
                        </div>
                    </li>



                  <!-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                            href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-settings-1 "></i><span class="m-menu__link-text">
                    <h6></h6>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">

                                <li class="m-menu__item " aria-haspopup="true"><a href=''
                                                                                  class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text"><h6> </h6></span></a></li>

                            </ul>
                        </div>
                    </li> -->
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                            href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-star "></i><span class="m-menu__link-text">
                    <h4>Reviews</h4>
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">

                                <li class="m-menu__item " aria-haspopup="true"><a href='{{URL('admin/storesreview')}}'
                                                                                  class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text"><h5>Show Reviews</h5></span></a></li>



                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">@yield("title")</h3>
                    </div>
                    @yield("search-side")
                    @yield("title-side")
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">


                @include("layout.shared.msg")
                @yield("content")

            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright"><h5>
								  Copyright © 2011-2021 Laravel .
							</h5></span>
                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                        <li class="m-nav__item">
                            <h6>
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">who are we</span>
                                </a>
                            </h6>
                        </li>
                        <li class="m-nav__item">
                            <h6>
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">Our Team</span>
                                </a>
                            </h6>
                        </li>
                        <li class="m-nav__item">
                            <h6>
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">Privacy policy</span>
                                </a>
                            </h6>
                        </li>
                        <li class="m-nav__item">
                            <h6>
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">Rules and Regulations</span>
                                </a>
                            </h6>
                        </li>
                        <li class="m-nav__item m-nav__item">
                            <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- end::Footer -->

</div>


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>


<!--begin::Global Theme Bundle -->
<script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--begin::Page Vendors -->
<script src="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"
        type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="{{asset('metronic/assets/app/js/dashboard.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
@yield("js")
</body>

</html>
