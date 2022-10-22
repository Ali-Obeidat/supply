<x-website.dashboard-master>
    @section('content')

    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">إضافة مشرف جديد</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">لوحة التحكم</a></li>
                            <li>المشرفين</li>
                            <li>إضافة مشرف جديد</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div>
    </div>
    <div class="dashboard-main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">إعداد الملف الشخصي</h3>
                        </div>
                        <div class="form-content">
                 
                            <div class="contact-form-action">
                                <form id="create_admin" action="{{route('admin.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">الإسم الأول</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="first_name" >
                                                    <span class="error_validate">
                                                        <span class="text-danger first_name_error info_error-text"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">الإسم الأخير</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="last_name">
                                                    <span class="error_validate">
                                                        <span class="text-danger last_name_error info_error-text"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">البريد الإلكتروني</label>
                                                <div class="form-group">
                                                    <span class="la la-envelope form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="EX: royeltravelagency@gmail.com" name="email">
                                                    <span class="error_validate">
                                                        <span class="text-danger email_error info_error-text"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                         <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">هاتف</label>
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input class="form-control" type="number" name="phone" >
                                                    <span class="error_validate">
                                                        <span class="text-danger phone_error info_error-text"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">كلمة السر</label>
                                                <div class="form-group">
                                                    <span class="la la-lock form-icon"></span>
                                                    <input class="form-control" type="password" name="password" >
                                                    <span class="error_validate">
                                                        <span class="text-danger password_error info_error-text"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="btn-box">
                                                <button class="theme-btn" type="submit">إضافه</button>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                                </form>
                            </div>
                        </div>
                    </div><!-- end form-box -->
                </div><!-- end col-lg-6 -->
           
               
             
            </div><!-- end row -->
            <div class="border-top mt-4"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            © Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="footer-social-box text-right padding-top-30px">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>

    @endsection
    @section('script')
    <script>
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name=_token]').val()
            }
        });

        $(function() {

            /* UPDATE ADMIN PERSONAL INFO */
            $('#create_admin').on('submit', function(e) {
                console.log('ali');
                e.preventDefault();
                // console.log($('input[name=_token]').val());

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,

                    beforeSend: function() {
                        $(document).find('span.error-text').text('');

                    },
                    success: function(response) {
                        console.log(response.error);
                        if (response.status == 0) {
                            $.each(response.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#create_admin')[0].reset();
                            window.location.href = response.url;
                        }
                    },
                    error: function (error)
                        {
                            console.log(error);
                        // error alert message
                        // alert('error :: ' + eval(error));
                        }
                });
            });
        });
    </script>
    @endsection
</x-website.dashboard-master>