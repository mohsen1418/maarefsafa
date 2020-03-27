@extends('layout.app')
@section('content')
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">
            <div class="row mb-5">
                <div class="col-xl-12 col-lg-12 col-12 order-1 order-lg-2">
                    <section id="main-slider" class="main-slider carousel slide carousel-fade card hidden-sm"
                             data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider" data-slide-to="1"></li>
                            <li data-target="#main-slider" data-slide-to="2"></li>
                            <li data-target="#main-slider" data-slide-to="3"></li>
                            <li data-target="#main-slider" data-slide-to="4"></li>
                            <li data-target="#main-slider" data-slide-to="5"></li>
                            <li data-target="#main-slider" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/1.jpg)">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/2.jpg)">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/3.jpg)">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/4.jpg)">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/5.jpg)">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/6.jpg)">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#"
                                   style="background-image: url(assets/img/main-slider/7.jpg)">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>
                    <section id="main-slider-res"
                             class="main-slider carousel slide carousel-fade card d-none show-sm" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main-slider-res" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider-res" data-slide-to="1"></li>
                            <li data-target="#main-slider-res" data-slide-to="2"></li>
                            <li data-target="#main-slider-res" data-slide-to="3"></li>
                            <li data-target="#main-slider-res" data-slide-to="4"></li>
                            <li data-target="#main-slider-res" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="main-slider-slide" href="#">
                                    <img src="assets/img/main-slider/slider-responsive/1.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="assets/img/main-slider/slider-responsive/2.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="assets/img/main-slider/slider-responsive/3.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="assets/img/main-slider/slider-responsive/4.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="assets/img/main-slider/slider-responsive/5.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="assets/img/main-slider/slider-responsive/6.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main-slider-res" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider-res" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <section class="slider-section dt-sl mb-5">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="section-title text-sm-title title-wide no-after-title-wide">
                                    <h2>دروس عمومی</h2>
                                    <a href="#">مشاهده همه</a>
                                </div>
                            </div>
                            <div class="col-12 px-res-0">
                                <div class="product-carousel carousel-md owl-carousel owl-theme">
                                    @foreach($lessons_all as $lesson)
                                        <div class="item">
                                            <div class="product-card">
                                                <a class="product-thumb" href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">
                                                    <img style="opacity: 0.1;" src="https://png.pngtree.com/svg/20151023/album_1328025.png" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">{{$lesson->name}}</a>
                                                    </h5>
                                                    <a class="product-meta">{{$lesson->group}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <section class="slider-section dt-sl mb-5">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="section-title text-sm-title title-wide no-after-title-wide">
                                    <h2>دروس گروهی</h2>
                                    <a href="#">مشاهده همه</a>
                                </div>
                            </div>
                            <div class="col-12 px-res-0">
                                <div class="product-carousel carousel-md owl-carousel owl-theme">
                                    @foreach($lessons_group as $lesson)
                                        <div class="item">
                                            <div class="product-card">
                                                <a class="product-thumb" href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">
                                                    <img style="opacity: 0.1;" src="https://png.pngtree.com/svg/20151023/album_1328025.png" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">{{$lesson->name}}</a>
                                                    </h5>
                                                    <a class="product-meta">{{$lesson->group}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
