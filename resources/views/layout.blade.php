<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 832 301 123</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> luongvinhlong35@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->
        <div class="container" >
            @include('menu')
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="col-sm-8" style="float: right;">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if (Auth::check())
                            <li><a href="user/info"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                            <li><a href="favorite{{Auth::user()->id}}">Yêu thích</a></li>
                            <li><a href="/admin/login" class="nav-link">Đăng xuất</a></li>

                        @else
                            <li><a href="user/info"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                {{-- @yield('content') --}}
            </div>
            <!--/header-bottom-->
    </header>
    <!--/header-->


    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        @include('sidebar')

                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <!--Footer-->
        @include('footer')
    </footer>
    <!--/Footer-->




</body>

</html>
