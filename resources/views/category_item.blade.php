@extends('layout.app')
@section('content')
    <main class="main-content dt-sl mt-4 mb-3" style="transform: none;">
        <div class="container main-container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-lg-3 col-md-3 col-sm-12 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div class="dt-sn mb-3">
                                <div class="col-12">
                                    <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide">
                                        <h2>دسته بندی موضوعی</h2>
                                    </div>
                                </div>
                                <div class="col-12 filter-product mb-3">
                                    @foreach($category as $cat)
                                    <div class="accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <a href="{{route('show_category_item', ['id' => $cat->id]) }}"> <button class="btn btn-block text-right collapsed">
                                                        <i class="mdi mdi-chevron-left"></i>{{$cat->onvan}}</button></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                        </div></div>
                    @if(Auth::check())
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div class="dt-sn mb-3">
                                <div class="col-12">
                                    <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide">
                                        <h2>{{"عناوین گروه ".Auth::user()->group}}</h2>
                                    </div>
                                </div>
                                <div class="col-12 filter-product mb-3">
                                    @foreach($lesson_group as $cat)
                                        <div class="accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2 class="mb-0">
                                                        <a href="{{route('ShowLessonItem', ['id' => $cat->id]) }}"> <button class="btn btn-block text-right collapsed">
                                                                <i class="mdi mdi-chevron-left"></i>{{$cat->name}}</button></a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 search-card-res">
                    <div class="dt-sl dt-sn px-0 search-amazing-tab">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide">
                                <h2>دسته بندی {{$category_name->onvan}}</h2>
                            </div>
                        </div>
                        <div class="ah-tab-wrapper dt-sl">
                            <div class="ah-tab-overflow-wrapper" data-ah-tab-active="false"><button type="menu" class="ah-tab-overflow-menu"></button><div class="ah-tab-overflow-list"><a class="ah-tab-item" data-ah-tab-active="true" href="">مرتبط ترین</a><a class="ah-tab-item" href="">پربازدید ترین</a><a class="ah-tab-item" href="">جدید ترین</a><a class="ah-tab-item" href="">پرفروش ترین</a><a class="ah-tab-item" href="">ارزان ترین</a><a class="ah-tab-item" href="">گران ترین</a></div></div></div>
                        <div class="ah-tab-content-wrapper dt-sl px-res-0">
                            <div class="ah-tab-content dt-sl" data-ah-tab-active="true">
                                <div class="row mb-3 mx-0 px-res-0">
                                    @foreach($lessons_all as $lesson)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <a class="product-thumb" href="{{route('ShowLessonItem', ['id' => $lesson->id]) }}">
                                                <img src="https://png.pngtree.com/svg/20151023/album_1328025.png" style="opacity: 0.3;" alt="Product Thumbnail">
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
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
