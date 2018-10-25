<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('head')

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/vazir.css">
    <link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="/css/style.css"> <!-- Resource style -->
    <script src="/js/modernizr.js"></script> <!-- Modernizr -->

</head>
<body>

<div class="blog-full bg-light">
    @include('frontend.partials.nav')

    <div class="container mt-4">
        @yield('content')
    </div>

</div>
<!-- Social Network -->
<div class="social-network-section">
    <div class="container">

        <div class="row no-gutters">

            <div class="col-12 col-md-3 social-network-icon">
                <a href="#"><img src="/img/google-plus-icon.png" alt=""></a>
            </div>
            <div class="col-12 col-md-3 social-network-icon">
                <a href="#"><img src="/img/linkedin-icon.png" alt=""></a>
            </div>
            <div class="col-12 col-md-3 social-network-icon">
                <a href="#"><img src="/img/facebook.png" alt=""></a>
            </div>
            <div class="col-12 col-md-3 social-network-icon">
                <a href="#"><img src="/img/twitter.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row full-footer">
            <div class="col-12 col-md-4 col-lg-4 about-us-footer">
                <div class="about-us-footer-title-section">
                    درباره ما
                </div>
                <div class="about-us-footer-description">
                    زمینه های کاری شرکت نیما وب طراحی سایت و بهینه سازی سایت و پشتیبانی سایت می باشد . همواره تلاش
                    ما بر این است که بهترین سرویس و خدمات را با مناسب ترین قیمت به شما مشتریان و کاربران سایت نیما
                    وب ارائه دهیم .
                </div>

            </div>
            <div class="col-12 col-md-4 col-lg-4 useful-link-footer">
                <div class="useful-link-footer-title">
                    لینک های مفید
                </div>
                <div class="useful-link-footer-description">
                    <span class="useful-link-footer-item">طراحی سایت در شیراز</span>
                    <span class="useful-link-footer-item">ساخت سایت در شیراز</span>
                    <span class="useful-link-footer-item">طراحی سایت ارزان در شیراز</span>
                    <span class="useful-link-footer-item">طراحی سایت شرکتی در شیراز</span>
                    <span class="useful-link-footer-item">طراحی سایت فروشگاهی در شیراز</span>
                </div>

            </div>
            <div class="col-12 col-md-4 col-lg-4 call-us">
                <div class="title-call-us">
                    <span>تماس با ما</span>
                </div>
                <div class="description-call-us">
                    <p>شیراز ، خیابان ملاصدرا شرکت فنی مهندسی نیما وب دیزاین</p>
                    <div class="phone-number-section">
                        <div class="phone-number-title-footer">
                                                   <span class="phonenumber-title-footer-description">
                                                       تلفن تماس  :
                                                   </span>
                        </div>
                        <div class="phone-number-footer">
                                                   <span class="phonenumber-footer-description">
                                                       09905667981
                                                   </span>
                        </div>
                    </div>
                    <div class="email-footer-section">
                        <div class="email-title-footer">
                            ایمیل :
                        </div>
                        <div class="email-address-footer">
                            sina[AT]gmail.com
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row copyright">

        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <span class="copyright-description">کلیه حقوق این سایت متعلق به نیما وب می باشد . </span>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
<!-- End of Script -->

</body>

</html>