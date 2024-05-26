{{-- <div class="oh mb-30">
    <div class="related-slider owl-carousel owl-theme">
        @foreach ($special_categories as $item)
        <a href="{{ route('products.category', ['id'=>$item->id, 'slug'=>slug($item->name)]) }}" class="d-block related-slide-item text-center">
            <div class="mb-10 oh rounded">
                <img src="{{ getImage(imagePath()['category']['path'].'/'.@$item->image, imagePath()['category']['size']) }}" class="w-100" alt="@lang('products-hot')">
            </div>
            <span class="line-limitation-1">{{ __($item->name) }}</span>
        </a>
        @endforeach
    </div>
    
</div> --}}
<style>
    .img-hover:hover {
        scale: 105%;
        color: #fd7e14;
    }
</style>
<div class="container mt-3">
    <div class="my-4 text-center">
        <h3 class="text-center">Products Category </h3>
        <div class="d-flex justify-content-center align-items-center">
            <div style="border-top: 3px solid #000; width: 10%;"></div>
            <i aria-hidden="true" class="fas fa-star" style="color: #ff6900; margin: 0 10px;"></i>
            <div style="border-top: 3px solid #000; width: 10%;"></div>
        </div>
    </div>

    <div class="row">
        @foreach ($special_categories as $item)
            <div class="col-md-3 col-sm-6">
                <a href="{{ route('products.category', ['id' => $item->id, 'slug' => slug($item->name)]) }}"
                    class="d-block text-center mx-1 my-2 p-1 align-items-center justify-content-center img-hover"
                    style="border: 1px solid #4b4949;">
                    <div class="mb-10 oh rounded align-items-center justify-content-center m-auto"
                        style="width: 100px; height:90px">
                        <img src="{{ getImage(imagePath()['category']['path'] . '/' . @$item->image, imagePath()['category']['size']) }}"
                            class="w-100 " alt="@lang('products-hot')">
                    </div>
                    <span class="line-limitation- text-dark" style="font-size: 12px">{{ __($item->name) }}</span>
                </a>
            </div>
        @endforeach
    </div>
</div>

<!--<div class="container">-->
<!--    <div classs="row">-->
<!--        <div class="related-slider owl-carousel owl-theme">-->
<!--    @foreach ($special_categories as $item)
-->
<!--    <a href="{{ route('products.category', ['id' => $item->id, 'slug' => slug($item->name)]) }}" class="d-block related-slide-item text-center">-->
<!--        <div class="mb-10 oh rounded">-->
<!--            <img src="{{ getImage(imagePath()['category']['path'] . '/' . @$item->image, imagePath()['category']['size']) }}" class="w-100" alt="@lang('products-hot')">-->
<!--        </div>-->
<!--        <span class="line-limitation-1">{{ __($item->name) }}</span>-->
<!--    </a>-->
<!--
@endforeach-->
<!--</div>-->
<!--    </div>-->
<!--</div>-->
