<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Colegio Santa Cecilia</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- StyleSheets -->
    {!! HTML::style('css/bootstrap/bootstrap.min.css')!!}
    {!! HTML::style('css/font-awesome.min.css')!!}
    {!! HTML::style('css/animate.css')!!}
    {!! HTML::style('css/main.css')!!}
    {!! HTML::style('css/style.css')!!}
    {!! HTML::style('css/color.css')!!}
    {!! HTML::style('css/responsive.css')!!}
    {!! HTML::style('css/transition.css')!!}


    <!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    {!! HTML::script('js/vendor/modernizr.js')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Wrapper -->
<div class="wrapper push-wrapper">

    <!-- Header -->
    <header>

        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">

                <!-- Address List -->
                <div class="address-list-top">
                    <ul>
                        <li><i class="fa fa-phone"></i>(511) 348-6044 </li>
                        <li><i class="fa fa-envelope"></i> santacecilialm@gmail.com
                        </li>
                    </ul>
                </div>
                <!-- Address List -->

                <!-- Login -->
                <div class="login-option">
                    <!-- Menu after login-->
                    @if (Auth::guest())
                        <li class="active">
                            <a data-toggle="modal" data-target=".login-modal" href="#">Acceder<i class="fa fa-sign-out"></i></a>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif



                </div>
                <!-- Login -->

            </div>
        </div>
        <!-- Top Bar -->

        <!-- Nav -->
        <div class="nav-holder z-depth-1">
            <div class="container">

                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img src="/images/logo.png" alt=""></a>
                </div>
                <!-- Logo -->

                <!-- Search Nd Cart -->
                <div class="search-nd-cart">
                    <ul>
                        <li class="link search"><a class="fa fa-search" href="#"></a></li>
                    </ul>
                </div>
                <!-- Search Nd Cart -->

                <!-- Search Popup -->
                <div id="searching">
                    <div id="searchThis">
                        {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form']) !!}
                        <input class="form-control" placeholder="{{trans('front/blog.search')}}" name="search" type="text">
                        {!! Form::close() !!}
                        <div id="closeSearch">X</div>
                    </div>
                    <div id="searchResults"></div>
                </div>

                <!-- Navigation -->
                <div class="nav-list">
                    <ul>

                        @if(session('statut') == 'visitor' || session('statut') == 'user')
                            <li {!! classActivePath('contact/create') !!}>
                                {!! link_to('contact/create', trans('front/site.contact')) !!}
                            </li>
                        @endif
                        <li {!! classActiveSegment(1, ['articles', 'blog']) !!}>
                            {!! link_to('articles','Publicaciones') !!}
                            <ul>
                                <li><a>Nuestros Docentes</a></li>
                                <li><a>Nuestros Estudiantes</a></li>
                            </ul>
                        </li>

                        <li {!! classActiveSegment(1, ['niveles', 'niveles']) !!}>
                            {!! link_to('articles','Niveles Academicos') !!}
                            <ul>
                                <li><a>Nivel Primario</a></li>
                                <li><a>Nivel Segundario</a></li>
                            </ul>
                        </li>
                        <li {!! classActiveSegment(1, ['Exalumnos', 'Exalumnos']) !!}>
                            {!! link_to('articles','Exalumnos') !!}
                        </li>
                        <li {!! classActiveSegment(1, ['Talleres', 'Talleres']) !!}>
                            {!! link_to('articles','Talleres') !!}
                        </li>

                    </ul>

                </div>
                <!-- Navigation -->

                <!-- Responsive Button -->
                <div class="responsive-btn">
                    <a href="#menu" class="menu-link circle-btn"><i class="fa fa-bars"></i></a>
                </div>
                <!-- Responsive Button -->

            </div>
        </div>
        <!-- Nav -->
        @yield('slider')
    </header>
    <!-- Header -->
 @yield('main')

<!-- Footer -->
    <footer class="footer">

        <!-- Footer Columns -->
        <div class="footer-column">
            <div class="container">
                <div class="row">

                    <!-- Colunm Widget -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f-column-widget">
                            <h4>Contactos</h4>
                            <div class="address-widget">
                                <p>Jr.Ricardo Palma 229, La Molina - Perú </p>
                                <ul class="address-list">
                                    <li><i class="fa fa-phone"></i>Telf.:(511) 348-6044 </li>
                                    <li><i class="fa fa-envelope"></i>santacecilialm@gmail.com</li>
                                </ul>
                                <ul class="social-icons">
                                    <li><a class="fa fa-twitter" href="#"></a></li>
                                    <li><a class="fa fa-facebook" href="#"></a></li>
                                    <li><a class="fa fa-instagram" href="#"></a></li>
                                    <li><a class="fa fa-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Colunm Widget -->

                    <!-- Colunm Widget -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f-column-widget">
                            <h4>Talleres </h4>
                            <ul class="courses-list-link">
                                <li><a href="#">Utinelit Quis</a></li>
                                <li><a href="#">Consectetur</a></li>
                                <li><a href="#">Congue Enim</a></li>
                                <li><a href="#">Eget consectetur</a></li>
                                <li><a href="#">Justo Ultrices</a></li>
                                <li><a href="#">Id Tellus</a></li>
                                <li><a href="#">Eget consectetur</a></li>
                                <li><a href="#">Justo Ultrices</a></li>
                                <li><a href="#">Id Tellus</a></li>
                                <li><a href="#">Utinelit Quis</a></li>
                                <li><a href="#">Consectetur</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Colunm Widget -->

                    <!-- Colunm Widget -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f-column-widget">
                            <h4>Recibir Informacion</h4>
                            <div class="newslatter">
                                <p>Ingrese su correo electrónico y le enviaremos más información sobre cursos y becas.</p>
                                <div class="form-group"><input type="text" class="form-control" placeholder="Your Email..." style="color: #fff"></div>
                                <button class="btn blue sm">Subscribete</button>
                            </div>
                        </div>
                    </div>
                    <!-- Colunm Widget -->

                    <!-- Colunm Widget -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="f-column-widget">
                            <h4>Galeria</h4>
                            <div class="instagram-gallery">
                                <ul>
                                    <li><a href="#"><img src="images/instagram/img-01.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/img-02.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/img-03.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/img-04.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/img-05.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/img-06.jpg" alt=""></a></li>
                                </ul>
                                <a href="#"><i class="fa fa-facebook"></i>@C_Santa_Cecilia</a>
                            </div>
                        </div>
                    </div>
                    <!-- Colunm Widget -->

                </div>
            </div>
        </div>
        <!-- Footer Columns -->

        <!-- Sub Footer -->
        <div class="sub-footer" style="display: none;">
            <div class="container">
                <p>© Copyright 2015. Powered by  ......</p>
                <ul class="sub-footer-nav">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy and Security</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
        <!-- Sub Footer -->

    </footer>
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
    <a class="r-nav-logo" href="/">

        <img src="/images/nav-logo.png"></a>
    @if (Auth::guest())

    @else
        <a href="#"><img src="{{Auth::user()->avatar}}" alt=""  class="user_img"></a>
    @endif

    <ul class="respoinve-nav-list">
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
            <ul class="collapse" id="list-1">
                <li><a class="triple-eff" href="">Home 1</a></li>
                <li><a class="triple-eff" href="">Home 2</a></li>
                <li><a class="triple-eff" href="">Home 3</a></li>
                <li><a class="triple-eff" href="">Home 4</a></li>
                <li><a class="triple-eff" href="">Home 5</a></li>
                <li><a class="triple-eff" href="">Home 6</a></li>
                <li><a class="triple-eff" href="">Home 7</a></li>
            </ul>
        </li>
        <!-- Menu after login-->
        @if(Request::is('auth/register'))
            <li class="active">
                {!! link_to('auth/register', trans('front/site.register')) !!}
            </li>
        @elseif(Request::is('password/email'))
            <li class="active">
                {!! link_to('password/email', trans('front/site.forget-password')) !!}
            </li>
        @else
            @if(session('statut') == 'visitor')
                <li {!! classActivePath('auth/login') !!}>
                    {!! link_to('auth/login', trans('front/site.connection')) !!}
                </li>
            @else
                @if(session('statut') == 'admin')
                    <li>
                        {!! link_to_route('admin', trans('front/site.administration')) !!}
                    </li>
                @elseif(session('statut') == 'redac')
                    <li>
                        {!! link_to('blog', trans('front/site.redaction')) !!}
                    </li>
                @endif
                <li>
                    {!! link_to('auth/logout', trans('front/site.logout')) !!}
                </li>
            @endif
        @endif
    </ul>
</nav>
<!-- Slide Menu -->

<!-- back To Button -->
<span id="scrollup" class="scrollup circle-btn"><i class="fa fa-angle-up"></i></span>
<!-- back To Button -->

<!-- Login Form -->
<div class="login-form">
    <div class="modal fade login-modal">
        <div class="modal-content position-center-center tc-hover">
            <img src="images/logo.png" alt="">
            <h4>{{ trans('front/login.connection') }}</h4>
            <p>{{ trans('front/login.text') }}</p>
            {!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}
            <div class="form-group">
                    <input type="text" name="log" required="required"/>
                    <label class="control-label">Correo o su nombre</label><i class="bar"></i>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required="required"/>
                    <label class="control-label">Password</label><i class="bar"></i>
                </div>
            <ul class="btn-list">
                <li><button class="btn blue sm full-width">Entrar</button></li>
                <li>{!! link_to('auth/register', trans('front/login.registering'), ['class' => 'btn blank dark sm full-width']) !!}</li>
            </ul>
            <div class="remeber-nd-forget">
                {!! link_to('password/email', trans('front/login.forget')) !!}
            </div>
                <div class="social-icons-2" style="display: none;">
                    <span>Conectarse con </span>
                    <ul>
                        <li><a class="fa fa-twitter-square" href="#"></a></li>
                        <li><a class="fa fa-facebook-square" href="#"></a></li>
                        <li><a class="fa fa-linkedin-square" href="#"></a></li>
                        <li><a class="fa fa-pinterest-square" href="#"></a></li>
                        <li><a class="fa fa-google-plus-square" href="#"></a></li>
                        <li><a class="fa fa-github-square" href="#"></a></li>
                    </ul>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- Login Form -->
<main role="main" class="container">
    @if(session()->has('ok'))
        @include('partials/error', ['type' => 'success', 'message' => session('ok')])
    @endif
    @if(isset($info))
        @include('partials/error', ['type' => 'info', 'message' => $info])
    @endif
</main>
<!-- Java Script -->
{!! HTML::script('js/vendor/jquery.js')!!}
{!! HTML::script('js/vendor/bootstrap.min.js')!!}
{!! HTML::script('js/jquery-ui.js')!!}
{!! HTML::script('http://maps.google.com/maps/api/js?sensor=false')!!}
{!! HTML::script('js/gmap3.min.js')!!}
{!! HTML::script('js/datepicker.js')!!}
{!! HTML::script('js/contact-form.js')!!}
{!! HTML::script('js/bigslide.js')!!}
{!! HTML::script('js/parallax.js')!!}
{!! HTML::script('js/countdown.js')!!}
{!! HTML::script('js/countTo.js')!!}
{!! HTML::script('js/owl-carousel.js')!!}
{!! HTML::script('js/bxslider.js')!!}
{!! HTML::script('js/appear.js')!!}
{!! HTML::script('js/prettyPhoto.js')!!}
{!! HTML::script('js/isotope.pkgd.js')!!}
{!! HTML::script('js/main.js')!!}
</body>

<!-- Mirrored from techlinqs.com/html/lincoln/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2016 20:15:17 GMT -->
</html>