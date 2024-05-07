<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="#" />
    <title>HMI KOMSTEK UMM</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/logoatas.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.bundle.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('back/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom custom-background"
                style="background-image: url(assets/media/svg/illustrations/latar6.jpg); background-size: cover; background-position: center;">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}"
                    style="background-color: rgba(67, 89, 57, 0.5)">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="#">
                                    <img alt="Logo" src="assets/media/logos/landing.png"
                                        class="logo-default h-25px h-lg-30px" />
                                    <img alt="Logo" src="assets/media/logos/latar11.png"
                                        class="logo-sticky h-20px h-lg-25px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="nav-link py-3 px-4 px-xxl-6" href="/"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item nav-item dropdown">
                                            <a class="dropdown-toggle nav-link py-3 px-4 px-xxl-6"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true"
                                                id="navbarDropdown" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Tentang HMI
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/sejarahhmi">Sejarah HMI</a>
                                                <a class="dropdown-item" href="/struktural">Struktural</a>
                                                <a class="dropdown-item" href="/arsip">Arsip</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="nav-link py-3 px-4 px-xxl-6" href="/publikasi"
                                                data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Publikasi</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="nav-link py-3 px-4 px-xxl-6" href="/berita"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="nav-link py-3 px-4 px-xxl-6" href="/databasekader"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Database
                                                Kader</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="nav-link py-3 px-4 px-xxl-6"
                                                href="https://wa.me/6282131941641/?text=Hello"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                <a href="/admin/login" class="btn btn-success"
                                    style="background-color: #435939">Login</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                @yield('content')
                <!--begin::Wrapper-->
                <div class="landing-dark-bg ">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row py-10 py-lg-20">
                            <!--begin::Col-->
                            <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                                <!--begin::Block-->
                                <div class=" p mb-10">
                                    <!--begin::Title-->
                                    <img alt="Logo" src="assets/media/logos/latar1.png"
                                        class="logo-sticky h-lg-40px" />
                                    <!--end::Title-->
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Navs-->
                                <div class="d-flex justify-content-center">
                                    <!--begin::Links-->
                                    <div class="d-flex fw-semibold flex-column me-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-black mb-6">Tautan</h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a href="/struktural"
                                            class="text-black text-hover-success fs-5 mb-6">Struktural</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="/berita" class="text-black text-hover-success fs-5 mb-6">Berita</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="/databasekader"
                                            class="text-black text-hover-success fs-5 mb-6">Database Kader</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                    <!--begin::Links-->
                                    <div class="d-flex fw-semibold flex-column ms-lg-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-black mb-6">Media Sosial</h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a href="https://www.instagram.com/hmikomstekumm" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                class="h-20px me-2" alt="" />
                                            <span class="text-black text-hover-success fs-5 mb-6">Instagram</span>
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://www.tiktok.com/@hmikomstekumm" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/tiktok.svg" class="h-20px me-2"
                                                alt="" />
                                            <span class="text-black text-hover-success fs-5 mb-6">Tiktok</span>
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                </div>
                                <!--end::Navs-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Separator-->
                    <div class="landing-dark-separator"></div>
                    <!--end::Separator-->
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                            <!--begin::Copyright-->
                            <div class="d-flex align-items-center order-2 order-md-1">
                                <!--begin::Logo-->
                                <a href="#">
                                    <img alt="Logo" src="assets/media/logos/latar1.png"
                                        class="h-15px h-md-20px" />
                                </a>
                                <!--end::Logo image-->
                                <!--begin::Logo image-->
                                <span class="mx-5 fs-6 fw-semibold text-black pt-1"
                                    href="https://keenthemes.com">&copy; Copyright HMI KOMSTEK UMM 2024.</span>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Copyright-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Footer Section-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                            transform="rotate(90 13 6)" fill="currentColor" />
                        <path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->
        </div>
        <!--end::Root-->
        <!--begin::Engage drawers-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                        transform="rotate(90 13 6)" fill="currentColor" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
        <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="assets/js/custom/landing.js"></script>
        {{-- <script src="assets/js/custom/pages/pricing/general.js"></script> --}}
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" --}}
        {{-- integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
<!--end::Body-->

</html>
