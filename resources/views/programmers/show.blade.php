<!DOCTYPE html>
<html lang="en">
<head>
    <title>Civic - CV Resume</title>
    <meta charset="UTF-8">
    <meta name="description" content="Civic - CV Resume">
    <meta name="keywords" content="resume, civic, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section start -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="site-logo">
                    <h2>Портфолио программиста</h2>

                </div>
            </div>
            <div class="col-md-8 text-md-right header-buttons">
                <a href="#" class="site-btn">Скачать резюме</a>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->

<!-- Hero section start -->
<section class="hero-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero-text">
                            <h2>{{$programmer->first_name}} {{$programmer->last_name}}</h2>
                            <p>{{$programmer->professional_title}}</p>
                        </div>
                        <div class="hero-info">
                            <h2>Главная информация</h2>
                            <ul>
                                <li><span>E-mail</span>{{$programmer->email}}</li>
                                <li><span>Phone </span>{{$programmer->phone}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <figure class="hero-image">
                            <img src="img/hero.jpg" alt="5">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Social links section start -->
<div class="social-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="social-link-warp">
                    <div class="social-links">
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                    </div>
                    <h2 class="hidden-md hidden-sm">Мои социальные сети</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Social links section end -->

<!-- Resume section start -->
<section class="resume-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Опыт работы</h2>
                </div>
                <ul class="resume-list">
                    <li>
                        <h2>{{$programmer->experience}}</h2>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Resume section end -->

<!-- Resume section start -->
<section class="resume-section with-bg spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Образование</h2>
                </div>
                <ul class="resume-list">
                    <li>
                        <h2>{{$programmer->education}}</h2>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Resume section end -->


<!-- Review section start -->
<section class="review-section spad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 offset-xl-2">
                <div class="section-title">
                    <h2>Рекомендации</h2>
                </div>
                <div class="review-slider owl-carousel">
                    <div class="single-review">
                        <div class="qut">“</div>
                        <p>пусто</p>
                        <h3>пусто</h3>
                        <h4>пусто</h4>
                    </div>
                    <div class="single-review">
                        <div class="qut">“</div>
                        <p>пусто</p>
                        <h3>пусто</h3>
                        <h4>пусто</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review section end -->



<!-- Extra section start -->
<section class="extra-section spad pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title">
                    <h2>Навыки</h2>
                </div>
                <ul class="resume-list">
                    <li>
                        <h2>{{$programmer->skills}}</h2>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Extra section end -->

<!-- Contact section start -->
<section class="contact-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title">
                    <h2>Напишите нам:</h2>
                </div>
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Имя">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Эл.почта">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="Предмет">
                            <textarea placeholder="Сообщение"></textarea>
                        </div>
                    </div>
                    <div class="text-md-right">
                        <button class="site-btn">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->

<!-- Footer section start -->
<footer class="footer-section">
    <div class="container text-center">
        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distirbuted by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
