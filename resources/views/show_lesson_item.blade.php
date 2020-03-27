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
                        </div>
                    </div>
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
                                <h2> عناوین
                                    {{"(".$lessons[0]->name." - ".$lessons[0]->onvan.")"}}
                                </h2>
                            </div>
                        </div>
                        <div class="ah-tab-wrapper dt-sl">
                            <div class="ah-tab-overflow-wrapper" data-ah-tab-active="false"><button type="menu" class="ah-tab-overflow-menu"></button><div class="ah-tab-overflow-list"><a class="ah-tab-item" data-ah-tab-active="true" href="">مرتبط ترین</a><a class="ah-tab-item" href="">پربازدید ترین</a><a class="ah-tab-item" href="">جدید ترین</a><a class="ah-tab-item" href="">پرفروش ترین</a><a class="ah-tab-item" href="">ارزان ترین</a><a class="ah-tab-item" href="">گران ترین</a></div></div></div>
                        <div class="ah-tab-content-wrapper dt-sl px-res-0">
                            <div class="ah-tab-content dt-sl" data-ah-tab-active="true">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <div class="dt-sl">
                                        <div class="table-responsive">
                                            <table class="table table-order">
                                                <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>عنوان</th>
                                                    <th>مشاهده</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lessons as $key=>$lesson)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$lesson->title}}</td>
                                                        @if($lesson->kind=="گروهی")
                                                            @if(Auth::check())
                                                                <td><a href="#myvideo{{$key}}" class="btn btn-success afterglow">مشاهده</a></td>
                                                            @else
                                                                <td><a href="{{route('login')}}" class="btn btn-danger">وارد شوید</a></td>
                                                            @endif
                                                        @else
                                                            <td><a href="#myvideo{{$key}}" class="btn btn-success afterglow">مشاهده</a></td>
                                                        @endif
                                                    </tr>
                                                    <video id="myvideo{{$key}}" width="960" height="540">
                                                        <source type="video/mp4" src="{{$lesson->adr}}" />
                                                    </video>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
