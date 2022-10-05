<x-website.web-master>
    @section('title')
    <title>تسجيل دخول</title>

    @endsection
    @section('content')

    <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
    <section class="hero-wrapper">
        <div class="modal-dialog modal-dialog-centered align-items-start" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">تسجيل الدخول</h5>
                        <p class="font-size-14">مرحبا! مرحبا بك في حسابك</p>
                    </div>

                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box">
                                <label class="label-text">ايميل المستخدم</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}"  autocomplete="email"  placeholder="اكتب الايميل الخاص بك">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">كلمه السر</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="اكتب كلمة المرور الخاصة بك">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">تذكرنى</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a>
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
    </section><!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->




    @endsection
    @section('script')
    <script type="text/javascript" src="{{asset('js/landingJS.js')}}"></script>
    @endsection
</x-website.web-master>