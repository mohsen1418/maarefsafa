<div class="row mt-3 mb-3">
    <div class="col-12">
        <div class="category-section dt-sn dt-sl">
            <div class="category-section-title dt-sl">
                <h3>دسته بندی موضوعی </h3>
            </div>
            <div class="category-section-slider dt-sl">
                <div class="category-slider owl-carousel owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1530px;">
                            @foreach($cat as $key=>$category)
                            <div class="owl-item active" style="width: 160px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{route('show_category_item', ['id' => $category->id]) }}" class="promotion-category">
                                        <img src="{{$category->url}}" alt="">
                                        <h4 class="promotion-category-name">{{$category->onvan}}</h4>
                                    </a>
                                </div>
                            </div>
                                @endforeach
                        </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="mdi mdi mdi-chevron-right"></i></button><button type="button" role="presentation" class="owl-next"><i class="mdi mdi mdi-chevron-left"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</div>
