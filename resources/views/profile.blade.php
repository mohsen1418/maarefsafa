@extends('layout.app')
@section('content')
    <main class="main-content dt-sl mt-4 mb-3" style="transform: none;">
        <div class="container main-container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1076.67px;"><div class="profile-sidebar dt-sl">
                            <div class="dt-sl dt-sn mb-3">
                                <div class="profile-sidebar-header dt-sl">
                                    <div class="profile-avatar float-right">
                                        <img src="{{asset('./assets/img/theme/avatar.png')}}">
                                    </div>
                                    <div class="profile-header-content mr-3 mt-2 float-right">
                                        <span class="d-block profile-username">{{Auth::user()->fname." ".Auth::user()->lname}}</span>
                                        <span class="d-block profile-phone">{{Auth::user()->mobile}}</span>
                                    </div>
                                    <div class="profile-link mt-2 dt-sl">
                                        <div class="row">
                                            <div class="col-6 text-center">
                                                <a href="">
                                                    <i class="mdi mdi-lock-reset"></i>
                                                    <span class="d-block">تغییر رمز</span>
                                                </a>
                                            </div>
                                            <div class="col-6 text-center">
                                                <a href="{{route('logout')}}">
                                                    <i class="mdi mdi-logout-variant"></i>
                                                    <span class="d-block">خروج از حساب</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 360px; height: 770px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="px-3">
                                <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                                    <h2>اطلاعات شخصی</h2>
                                </div>
                                <div class="profile-section dt-sl">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>نام و نام خانوادگی:</span>
                                            </div>
                                            <div class="value-info">
                                                <span>{{$user->fname." ".$user->lname}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>شماره تلفن همراه:</span>
                                            </div>
                                            <div class="value-info">
                                                <span>{{$user->mobile}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>نام گروه:</span>
                                            </div>
                                            <div class="value-info">
                                                <span>{{$user->group}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="px-3">
                                <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                                    <h2>لیست نمرات</h2>
                                </div>
                                <div class="profile-section dt-sl">
                                    <ul class="list-favorites">
                                        @foreach($marks as $mark)
                                        <li>
                                            <a><span>{{$mark->title}}</span></a>
                                            <button>{{$mark->point}}</button>
                                        </li>
                                            @endforeach
                                    </ul>
                                    <div class="profile-section-link">
                                        <a class="border-bottom-dt" style="color: #f7858d">
                                            معدل کل : {{$avg}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="slider-section dt-sl mt-5 mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>دروس عمومی </h2>
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>
                    <div class="col-12 px-res-0">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1554px;">
                                        @foreach($lessons_all as $lesson)
                                        <div class="owl-item active" style="width: 212px; margin-left: 10px;">
                                        <div class="item">
                                            <div class="product-card mb-3">
                                                <a class="product-thumb" href="shop-single.html">
                                                    <img src="https://png.pngtree.com/svg/20151023/album_1328025.png" style="opacity: 0.3" alt="Product Thumbnail">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">{{$lesson->name}}</a>
                                                    </h5>
                                                    <a class="product-meta">{{$lesson->onvan}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled">
                                    <i class="mdi mdi mdi-chevron-right"></i>
                                </button>
                               </div><button role="button" class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </section>
            <section class="slider-section dt-sl mt-5 mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>دروس گروه {{$user->group}} </h2>
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>
                    <div class="col-12 px-res-0">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1554px;">
                                        @foreach($lessons as $lesson)
                                        <div class="owl-item active" style="width: 212px; margin-left: 10px;">
                                            <div class="item">
                                                <div class="product-card mb-3">
                                                    <a class="product-thumb" href="shop-single.html">
                                                        <img src="https://png.pngtree.com/svg/20151023/album_1328025.png" style="opacity: 0.3" alt="Product Thumbnail">
                                                    </a>
                                                    <div class="product-card-body">
                                                        <h5 class="product-title">
                                                            <a href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">{{$lesson->name}}</a>
                                                        </h5>
                                                        <a class="product-meta">{{$lesson->group}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled">
                                    <i class="mdi mdi mdi-chevron-right"></i>
                                </button>
                            </div><button role="button" class="owl-dot"><span></span></button></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
