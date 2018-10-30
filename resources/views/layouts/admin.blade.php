<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/cmsstyle.css">
    <link rel="stylesheet" href="/css/vazir.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <title></title>

</head>

<body>
<div class="top-menu w-100 border-bottom border-info shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 bg-light py-2 text-center">
                <h5>پنل مدیریت سایت نیما وب</h5>
            </div>

            <div class="col-12 col-md-3 bg-dark py-2 text-white text-center">
                <h5>کاربر ادمین به پنل مدیریت خوش آمدید</h5>
            </div>
            <div class="col-12 col-md-3 bg-light py-2 text-center">
                <?php
                $date = \Morilog\Jalali\CalendarUtils::strftime('d / m / Y', strtotime(\Carbon\Carbon::now()->toDateString())); // 1395-02-19
                $date =  \Morilog\Jalali\CalendarUtils::convertNumbers($date);
                ?>
                <h5>تاریخ امروز :{{ $date }}</h5>
            </div>
            <div class="col-12 col-md-2 col-12 col-md-4 bg-light py-2">
                <div class="row">
                    <div class="col-12 col-md-5 mx-3">
                        <button type="button" class="btn btn-info  ">
                            رفتن به صفحه اصلی سایت
                        </button>
                    </div>
                    <div class="col-12 col-md-5 mx-3">
                        <a href=<?php echo "check.php?exit=1222" ?> >
                            <button type="button" class="btn btn-primary  ">
                                خروج
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="full-page-content">
    <div class="container-fluid">
        <div class="row bg-light">
            <div class="col-12 col-md-2 bg-dark text-white px-0 shadow-sm menu-sidebar">
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('admin.dashboard') }}"><h6>صفحه نخست</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('article.addArticle') }}"><h6>افزودن نوشته</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('admin.articles.list') }}"><h6>مشاهده همه ی نوشته ها</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('admin.categories.create') }}"><h6>افزودن دسته بندی</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('admin.categories.list') }}"><h6>مشاهده دسته بندی ها</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('admin.tags.create') }}"><h6>افزودن برچسب</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="{{ route('admin.tags.list') }}"><h6>مشاهده برچسب ها</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="#"><h6>تغییر تصاویر اسلایدر صفحه اصلی</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="#"><h6>تنطیمات</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="#"><h6>ایمیل های ارسالی و دریافتی</h6></a>
                </div>
                <div class="element-in-menu w-100 py-3 text-center border-bottom border-info">
                    <a href="#"><h6>تغییر تصاویر اسلایدر صفحه اصلی</h6></a>
                </div>
            </div>
            <div class="col-12 col-md-8 w-100 bg-light mt-4 mr-4 shadow-sm">
                @yield('content')
            </div>
        </div>
    </div>
</div>





            <script src="/js/jquery-2.1.4.js"></script>
            <script src="/js/select2.min.js"></script>
            <script src="/js/custom-admin.js"></script>
</body>

</html>
