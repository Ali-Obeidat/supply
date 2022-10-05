<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')


    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/ammenlogo.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.filer.css')}}">
    <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-rtl.css')}}">
    @yield('style')
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">

        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down arrow"></i></a>
                            <div class="logo">
                                <a href="/"><img class="p-2" width="100px" height="100px" src="" alt="logo"> <span id="logo_name" style=""></span></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                            </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav class="d-flex">
                                    <ul>
                                        <!-- <li>
                                            <a href="#">تأمين السيارات<i class="la la-angle-down arrow"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="/car/تأمين-ضد-الغير">تأمين ضدالغير</a></li>
                                                <li><a href="/car/التأمين-الشامل"> تأمين شامل</a></li>

                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="#"> خدماتي <i class="la la-angle-down arrow"></i></a>
                                            <ul class="dropdown-menu-item" style="width: 276px !important;">
                                                <li><a href="#">طباعة وثيقة تأمين السيارات أونلاين</a></li>
                                                <li><a href="index2.html">استعلام عن حالة ربط الوثيقة بالمرور</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="#">جولة <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="tour-fullwidth.html">العرض الكامل للجولة</a></li>
                                                <li><a href="tour-grid.html">شبكة الرحلات</a></li>
                                                <li><a href="tour-list.html">قائمة الجولات</a></li>
                                                <li><a href="tour-left-sidebar.html">جولة في الشريط الجانبي الأيسر</a></li>
                                                <li><a href="tour-right-sidebar.html">جولة الشريط الجانبي الأيمن</a></li>
                                                <li><a href="tour-details.html">تفاصيل الجولة</a></li>
                                                <li><a href="tour-booking.html">حجز الرحلات</a></li>
                                                <li><a href="tour-search-result.html">نتيجة البحث عن الجولة</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="#">رحلة بحرية <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="cruises.html">الرحلات البحرية</a></li>
                                                <li><a href="cruises-list.html">قائمة الرحلات البحرية</a></li>
                                                <li><a href="cruise-sidebar.html">كروز الشريط الجانبي</a></li>
                                                <li><a href="cruise-details.html">تفاصيل الرحلة</a></li>
                                                <li><a href="cruise-booking.html">حجز الرحلات البحرية</a></li>
                                                <li><a href="cruise-search-result.html">نتيجة بحث الرحلات البحرية</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li>
                                            <a href="#">تواصل معنا </a>
                                        </li> -->
                                        @guest
                                        <div class="header-right-action px-2">
                                            @if (Route::has('login'))
                                            <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">
                                                <svg id="login_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <g id="Group_47" data-name="Group 47">
                                                        <rect id="Rectangle_114" data-name="Rectangle 114" width="24" height="24" fill="none" />
                                                    </g>
                                                    <g id="Group_48" data-name="Group 48">
                                                        <path id="Path_69" data-name="Path 69" d="M11,7,9.6,8.4,12.2,11H2v2H12.2L9.6,15.6,11,17l5-5Zm9,12H12v2h8a2.006,2.006,0,0,0,2-2V5a2.006,2.006,0,0,0-2-2H12V5h8Z" fill="#fff" />
                                                    </g>
                                                </svg>
                                                تسجيل الدخول
                                            </a>
                                            @endif

                                            @if (Route::has('register'))
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">سجل</a>

                                            @endif
                                        </div>
                                        @else
                                        <li>
                                            <a href="#">{{ Auth::user()->name }} حسابي<i class="la la-angle-down arrow"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="/user_profile">الملف الشخصي</a></li>
                                                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        تسجيل خروج
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                                    </ul>

                                </nav>

                            </div><!-- end main-menu-content -->



                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->

    @yield('content')


    <!-- ================================
       START FOOTER AREA
================================= -->
    <section class="footer-area section-bg padding-top-100px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.html" class="foot__logo"><img class="p-2" width="100px" height="100px" src="{{asset('images/ammenlogo.png')}}" alt="logo"></a>
                        </div><!-- end logo -->
                        <ul class="list-items pt-3">
                            <li>+123-456-789</li>
                            <li><a href="#">ammen@yourwebsite.com</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">منتجاتنا</h4>
                        <ul class="list-items list--items">
                            <li><a href="/">تأمين السيارات</a></li>
                            <!-- <li><a href="services.html">خدمات</a></li>
                            <li><a href="#">وظائف</a></li>
                            <li><a href="blog-grid.html">أخبار</a></li>
                            <li><a href="contact.html">الدعم</a></li>
                            <li><a href="#">إعلان</a></li> -->
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">المصادر</h4>
                        <ul class="list-items list--items">
                            <li><a href="#">الأسئلة الشائعة</a></li>
                            <li><a href="#">لوائح البنك المركزي</a></li>
                            <li><a href="#">الوظائف</a></li>
                            <li><a href="#">شركاؤنا</a></li>

                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">الدعم</h4>
                        <p class="footer__desc pb-3">اشترك للحصول على آخر التحديثات والعروض الترويجية</p>
                        <ul class="list-items list--items">
                            <li><a href="#">تواصل معنا</a></li>
                            <li><a href="#">سياسة الخصوصية</a></li>
                            <li><a href="#">الشروط والاحكام</a></li>


                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="#">البنود و الظروف</a></li>
                            <li><a href="#">سياسة خاصة</a></li>
                            <li><a href="#">مركز المساعدة</a></li>
                        </ul>
                    </div>
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="footer-social-box text-right">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Ammen 2022.

                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                        <h3 class="title font-size-15 pr-2">نحن نقبل</h3>
                        <img src="{{asset('images/payment-img.png')}}" alt="">
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer-area -->
    <!-- ================================
       START FOOTER AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">سجل</h5>
                            <p class="font-size-14">مرحبا! مرحبًا ، قم بإنشاء حساب جديد</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-box col-6">
                                        <label class="label-text">الإسم الأول</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="firstname" placeholder="اكتب اسم الأول الخاص بك">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-6">
                                        <label class="label-text">الإسم الأخير</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="lastname" placeholder="اكتب اسم الأخير الخاص بك">
                                        </div>
                                    </div><!-- end input-box -->
                                </div>
                                <div class="row">
                                    <div class="input-box col-6">
                                        <label class="label-text">عنوان البريد الالكترونى</label>
                                        <div class="form-group">
                                            <span class="la la-envelope form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="اكتب بريدك الإلكتروني">
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box col-6">
                                        <label class="label-text">رقم الهاتف</label>
                                        <div class="form-group">
                                            <span class="la la-phone form-icon"></span>
                                            <input class="form-control" type="number" name="phone" placeholder="07XXXXXXXX">
                                        </div>
                                    </div><!-- end input-box -->
                                </div>

                                <div class="input-box">
                                    <label class="label-text">كلمه السر</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password" placeholder="أكتب كلمة المرور">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">اعد كلمة السر</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="اكتب كلمة المرور مرة أخرى">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">تسجيل حساب</button>
                                </div>

                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="@if(session('openLogin')) modal fade show  @else modal fade @endif" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">تسجيل الدخول</h5>
                            <p class="font-size-14">مرحبا! مرحبا بك في حسابك</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="input-box">
                                    <label class="label-text">ايميل المستخدم</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="اكتب الايميل الخاص بك">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">كلمه السر</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password" placeholder="اكتب كلمة المرور الخاصة بك">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input type="checkbox" id="rememberchb">
                                            <label for="rememberchb">تذكرنى</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="recover.html">هل نسيت كلمة المرور؟</a>
                                        </p>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">تسجيل الدخول</button>
                                </div>

                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->


    <!-- Template JS Files -->

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('js/animated-headline.js')}}"></script>
    <script src="{{asset('js/jquery.filer.min.js')}}"></script>
    <script src="{{asset('js/jquery.ripples-min.js')}}"></script>
    <script src="{{asset('js/quantity-input.js')}}"></script>
    <script src="{{asset('js/main-rtl.js')}}"></script>
    @yield('script')
</body>

</html>