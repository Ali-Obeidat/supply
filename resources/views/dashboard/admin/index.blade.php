<x-website.dashboard-master>
    @section('content')

    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">عرض جميع المشرفين</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">لوحة التحكم</a></li>
                            <li>المشرفين</li>
                            <li>عرض جميع المشرفين</li>
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
                            <div>
                                <h3 class="title">قوائم المسافر</h3>
                                <p class="font-size-14">إظهار 1 إلى 10 من أصل 20 مُدخل</p>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="table-form table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">رقم</th>
                                            <th scope="col">اسم</th>
                                            <th scope="col">البريد الإلكتروني</th>
                                            <th scope="col">رقم الهاتف</th>
                                        
                                            <th scope="col">عمل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin )
                                        <tr>
                                            <th scope="row">{{$admin->id}}</th>
                                            <td>
                                                <div class="table-content">
                                                    <h3 class="title">{{$admin->full_name}}</h3>
                                                </div>
                                            </td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->phone}} </td>
                                           
                                            <td>
                                                <div class="table-content d-flex">
                                                    <form action="{{route('admin.destroy',$admin->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="theme-btn theme-btn-small mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف"><i class="la la-trash"></i></button>

                                                    </form>
                                                   
                                                    <a href="{{route('admin.edit',$admin->id)}}" class="theme-btn theme-btn-small" data-toggle="tooltip" data-placement="top" title="" data-original-title="تعديل"><i class="la la-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
 

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end form-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-nav" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="border-top mt-5"></div>
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

    @endsection
</x-website.dashboard-master>