@extends('layout.app')
@section('content')
<main class="main-content dt-sl mt-4 mb-3">
    <div class="container main-container">
        @include('index.slider')
        @include('index.category')
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <section class="slider-section dt-sl mb-3">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2>جدیدترین ها</h2>
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
                                            <a class="product-meta">{{$lesson->onvan}}</a>
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
                <section class="slider-section dt-sl mb-3">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2>نمایه صوتی</h2>
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
                                                <a class="product-meta">{{$lesson->onvan}}</a>
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
