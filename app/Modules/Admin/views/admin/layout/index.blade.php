<!DOCTYPE html>
<html lang="en">

<head>

    @php

        $settings = \App\Bll\Utility::get_main_settings();
        $master_settings = \App\Bll\Utility::get_site_settings();
        $images = \App\Bll\Utility::get_default_images();
        $now = Illuminate\Support\Carbon::now();
        $after_7_days = Illuminate\Support\Carbon::now()->addDays(7);
        $days = '';
    @endphp
    @if ($settings != null)
        <title> {{ $settings['title'] }} | {{ !empty($title) ? $title : _i('Control panel') }}</title>
    @else
        <title> {{ env('APP_NAME') }} | {{ !empty($title) ? $title : _i('Control panel') }}</title>
    @endif
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
        content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ $images->favicon }}" type="image/gif" sizes="16x16">
    <!-- Google font-->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/icon/icofont/css/icofont.css') }}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/pages/flag-icon/flag-icon.min.css') }}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/pages/menu-search/css/component.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/bower_components/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/icon/SVG-animated/svg-weather.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/pages/widget/flipclock/flipclock.css') }}">

    <!-- nestable css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/pages/nestable/nestable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">



    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/pages/j-pro/css/demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/pages/j-pro/css/j-forms.css') }}">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/bower_components/switchery/css/switchery.min.css') }}">
    <!-- Color Picker css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/bower_components/spectrum/css/spectrum.css') }}" />
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/pages/jquery-minicolors/css/jquery.minicolors.css') }}" />

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/style.css') }}?q=<?= time() ?>">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/linearicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/ionicons.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_dashboard/assets/css/jquery.mCustomScrollbar.css') }}">

    <link href="{{ asset('custom/parsley.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin_dashboard/plugins/noty/noty.css') }}">
    <script src="{{ asset('admin_dashboard/plugins/noty/noty.min.js') }}"></script>
    {{-- <link href="{{asset('css/widget.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/rtl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fonts.css') }}">
    @endif
    {{-- <link href="{{asset('css/custom.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/extra.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/new.css') }}">
    {{-- datatable style --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />

    @stack('css')
</head>
<!-- Menu sidebar static layout -->

<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>


    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('admin.layout.header')

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('admin.layout.nav')

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4> {!! !empty($subtitle) ? $subtitle : '' !!}</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('admin') }}">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                @if (!empty($additionalPageName))
                                                    <li class="breadcrumb-item"><a
                                                            href="{{ $additionalPageUrl }}">{{ $additionalPageName }}</a>
                                                    </li>
                                                @endif
                                                @if (!empty($activePageName))
                                                    <li class="breadcrumb-item"><a
                                                            href="{{ $activePageUrl }}">{{ $activePageName }}</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        @include('admin.layout.message')
                                        @yield('header')
                                        @yield('content')
                                    </div>
                                    @include('admin.layout.session')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/jquery-ui/js/jquery-ui.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/popper.js/js/popper.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/bootstrap/js/bootstrap.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/assets/pages/widget/flipclock/flipclock.min.js') }}">
    </script>

    <!-- data-table js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    {{-- </script> --}}
    <script src="{{ asset('admin_dashboard/assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/pages/data-table/js/vfs_fonts.js') }}"></script>

    <!-- jquery slimscroll js -->
    <script type="text/javascript"
        src="{{ asset('admin_dashboard/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/modernizr/js/modernizr.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/modernizr/js/css-scrollbars.js') }}">
    </script>
    <!-- classie js -->
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/classie/js/classie.js') }}"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/i18next/js/i18next.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('admin_dashboard/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('admin_dashboard/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('admin_dashboard/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/select2/js/select2.full.min.js') }}">
    </script>
    <!-- Custom js -->
    <script src="{{ asset('admin_dashboard/assets/pages/nestable/jquery.nestable.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/pages/nestable/custom-nestable.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/assets/js/script.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/js/pcoded.min.js') }}"></script>

    @if (LaravelGettext::getLocale() == 'ar')
    @else
        <script src="{{ asset('admin_dashboard/assets/js/demo-12.js') }}"></script>
    @endif

    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="{{ asset('custom/bootstrap-editable/css/bootstrap-editable.css') }}">

    <script src="{{ asset('admin_dashboard/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin_dashboard/bower_components/switchery/js/switchery.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('admin_dashboard/assets/pages/advance-elements/swithces.js') }}"></script>

    <script src="{{ asset('custom/parsley.min.js') }}"></script>

    @stack('js')
    @yield('script')

    <script>
        /*share icon toggle*/
        $('.share').hide();
        $(".option-font").on('click', function() {
            $(this).next().toggle("slide");
        });
        $(function() {
            'use strict'

            $('.selectpicker').on('change', function(e) {})
            $('.dropdown-toggle').click(function() {});
        })
        /*end share icon toggle */
    </script>

    <script>
        //

        $(function() {
            $('.modal').on('hidden.bs.modal', function() {
                $('.modal-backdrop').removeClass('modal-backdrop');
                $('body').css({
                    'padding-right': '0'
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        let locate = "{!! LaravelGettext::getLocale() !!}";

        if (locate === 'ar') {
            $(document).ready(function() {
                $("#pcoded").pcodedmenu({
                    verticalMenuplacement: 'right',
                });
            });
        }
    </script>
    <script>
        $.ajaxSetup({
            error: function(jqXHR, exception) {
                if (jqXHR.status === 401) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: "{{ _i('Server Error') }}",
                        showConfirmButton: false,
                        timer: 2000
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: "{{ _i('Server Error') }}",
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
            }
        });
    </script>


</body>

</html>
