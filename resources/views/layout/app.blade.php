<!DOCTYPE html>
<html lang="fa">
<head>
    @include('layout.head')
</head>
<body>
<div class="wrapper">
    <header class="main-header dt-sl">
        <div class="container main-container">
            <div class="topbar dt-sl">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="logo-area float-right">
                            <a href="http://alonerkh.ir">
                                <img src="{{ asset('assets/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 hidden-sm">
                        <div class="search-area dt-sl">
                            <form action="#" class="search">
                                <input type="text"
                                       placeholder="لطفا نام فایل مورد نظر را وارد نمایید ...">
                                <button type="submit"><img src="{{ asset('assets/img/theme/search.png')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header dt-sl mb-sm-bottom-header">
            <div class="container main-container">
                <nav class="main-menu dt-sl">
                    <ul class="list float-right hidden-sm">
                        <li class="list-item  mega-menu mega-menu-col-2">
                            <a class="nav-link" href="http://maarefsafa.ir/">صفحه اصلی</a>
                        </li>
                        <li class="list-item  mega-menu mega-menu-col-2">
                            <a class="nav-link" href="{{route('show_category')}}">دسته بندی</a>
                        </li>
                    </ul>
                    <ul class="nav float-left">
                        @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <span class="label-dropdown">{{Auth::user()->fname." ".Auth::user()->lname}}</span>
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                <a class="dropdown-item" href="{{route('ShowProfile', ['id' => Auth::user()->id]) }}">
                                    <i class="mdi mdi-account-card-details-outline"></i>پروفایل
                                </a>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                <button class="dropdown-item" type="submit">
                                        <i class="mdi mdi-logout-variant"></i>خروج
                                    </button>
                                    </form>
                            </div>
                        </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">
                                    <span class="label-dropdown">ورود کاربران</span>
                                    <i class="mdi mdi-login"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <button class="btn-menu">
                        <div class="align align__justify">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    <div class="side-menu">
                        <div class="logo-nav-res dt-sl text-center">
                            <a href="#">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="search-box-side-menu dt-sl text-center mt-2 mb-3">
                            <form action="#">
                                <input type="text" name="s" placeholder="جستجو کنید...">
                                <i class="mdi mdi-magnify"></i>
                            </form>
                        </div>
                        @include('layout.menu')
                    </div>
                    <div class="overlay-side-menu">
                    </div>
                </nav>
                <!-- End Main-Menu -->
            </div>
        </div>
        <!-- End bottom-header -->
    </header>
@yield('content')
@include('layout.script')
