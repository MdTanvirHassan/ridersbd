<!-- Featured Section Starts Here -->
<div class="featured-section padding-bottom-half padding-top-half oh">
    <div class="container">
        <style>

        </style>

<section class="py-5">
    <div class="container">
        <div class="my-4 text-center">
            <h3 class="text-center">R.Riders Group Ltd</h3>
            <div class="d-flex justify-content-center align-items-center">
                <div style="border-top: 3px solid #000; width: 10%;"></div>
                <i aria-hidden="true" class="fas fa-star" style="color: #ff6900; margin: 0 10px;"></i>
                <div style="border-top: 3px solid #000; width: 10%;"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="pb-3">
                    <h4 class=""  style="border-bottom:2px solid #000; width:20%">About Us</h4>
                </div>
                <div>
                    <style>
                        .text-color {
                            color: #ff6900 !important;
                        }

                        .text-color:hover {
                            color: #f79a59 !important;
                        }
                    </style>
                    <p>
                        <a href="http://Machine price in Bangladesh" target="_blank" rel="noopener"
                            class="text-color">R.Riders Group Ltd</a>
                        <br />
                        <a href="https://www.facebook.com/2octopusgroupbd" target="_blank" rel="noopener"
                            class="text-color">Riders imports &amp; supplier</a>
                        <br />
                        <p class="justify-content" style="text-align: justify; text-justify: inter-word;">products Sourcing, Buy, payment, Lc, Door to Door service.<br />
                        installation, services warranty, Training extra<br />we give you all in all solutions
                        of every imported product and machinery. Machine price in Bangladesh.</p>
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="pb-3">
                    <h4 class="" style="border-bottom:2px solid #000; width:25%">Why Us</h4>
                </div>
                <div>
                    <ul style="list-style-type: circle;" class="">
                        <li style="list-style-type: circle;">
                            <a href="http://Riders Import &amp; Export" target="_blank" rel="noopener"
                                class="text-color">মেশিন</a>
                            আমরাই সেটাপ করে দিবো আপনার লোকেশনে,
                        </li>
                        <li style="list-style-type: circle;">মেশিনের সাথে আপনি ফ্রি ট্রেনিং পাবেন,</li>
                        <li style="list-style-type: circle;">
                            মেশিন/পন্য গোডাউন থেকে নেওয়ার ভাড়া / ট্রান্সপোর্ট আপনাকেই দিতে হবে,<br />মেশিনে
                            আপনি ১ বছর পর্যন্ত ওয়ারেন্টি পাবেন,
                        </li>
                        <li style="list-style-type: circle;">মেশিনে আপনি ২ বছর পর্যন্ত ফ্রি সার্ভিসিং পাবেন,</li>
                        <li style="list-style-type: circle;">সার্ভিসিং এ আমাদের লোক যাবে, তাদের TA (ট্রাভেলিং ভাড়া) দিতে হবে।</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>





        <!-- <div class="section-header-2">
            <h3 class="title">@lang('Our Featured Products')</h3>
            <a href="{{ route('products') }}" class="custom-button theme btn-sm">@lang('View All Products')</a>
        </div>
        <div class="m--15">
            <div class="row mb-30-none page-main-content" style="width: 300px" id="grid-view">
        
                @php $count = 0; @endphp
                @foreach ($featured_products as $item)
                    @php
                        if ($item->offer && $item->offer->activeOffer) {
                            $discount = calculateDiscount(
                                $item->offer->activeOffer->amount,
                                $item->offer->activeOffer->discount_type,
                                $item->base_price,
                            );
                        } else {
                            $discount = 0;
                        }
                        $wCk = checkWishList($item->id);
                        $cCk = checkCompareList($item->id);
                    @endphp
        
                    <div class="product-item-2">
                        <div class="product-item-2-inner wish-buttons-in">
                            <ul class="wish-react">
                                <li>
                                    <a href="javascript:void(0)" title="@lang('Add To Wishlist')"
                                        class="add-to-wish-list {{ $wCk ? 'active' : '' }}"
                                        data-id="{{ $item->id }}"><i class="lar la-heart"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title=" @lang('Compare')"
                                        class="add-to-compare {{ $cCk ? 'active' : '' }}"
                                        data-id="{{ $item->id }}"><i class="las la-sync-alt"></i></a>
                                </li>
                            </ul>
                            <div class="product-thumb">
                                <a href="{{ route('product.detail', ['id' => $item->id, 'slug' => slug($item->name)]) }}">
                                    <img src="{{ getImage(imagePath()['product']['path'] . '/thumb_' . @$item->main_image, imagePath()['product']['size']) }}"
                                        alt="@lang('flash')">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-before-content">
                                    <h6 class="title">
                                        <a href="{{ route('product.detail', ['id' => $item->id, 'slug' => slug($item->name)]) }}">
                                            {{ __($item->name) }}
                                        </a>
                                    </h6>
                                    <div class="ratings-area justify-content-between">
                                        <div class="ratings">
                                            @php echo __(display_avg_rating($item->reviews)) @endphp
                                        </div>
                                        <span class="ml-2 mr-auto">({{ __($item->reviews->count()) }})</span>
                                        <div class="price">
                                            @if ($discount > 0)
                                                {{ $general->cur_sym }}{{ getAmount($item->base_price - $discount, 2) }}
                                                <del>{{ getAmount($item->base_price, 2) }}</del>
                                            @else
                                                {{ $general->cur_sym }}{{ getAmount($item->base_price, 2) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="product-after-content">
                                    <button data-product="{{ $item->id }}" class="cmn-btn btn-sm quick-view-btn">
                                        @lang('View')
                                    </button>
                                    <div class="price">
                                        @if ($discount > 0)
                                            {{ $general->cur_sym }}{{ $item->base_price - $discount }}
                                            <del>{{ getAmount($item->base_price, 2) }}</del>
                                        @else
                                            {{ $general->cur_sym }}{{ getAmount($item->base_price, 2) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $count++; @endphp
                    @if($count == 4) @break @endif
                @endforeach
        
            </div>
        </div>
        
    </div>
</div> -->
<!-- Featured Section Ends Here -->

<div class="section-header-2">
    <h3 class="title">@lang('Our New Products')</h3>
    <a href="{{ route('products') }}" class="custom-button theme btn-sm">@lang('View All Products')</a>
</div>

<?php
    use App\Product;
    
    $products = Product::orderBy('created_at', 'desc')->get();
?>

<div class="page-main-content">
    <div class="row mb-30-none my-5" id="grid-view">
        @php $count = 0; @endphp
        @foreach ($products as $item)
            @php
                if($item->offer && $item->offer->activeOffer){
                    $discount = calculateDiscount($item->offer->activeOffer->amount, $item->offer->activeOffer->discount_type, $item->base_price);
                } else {
                    $discount = 0;
                }
                $wCk = checkWishList($item->id);
                $cCk = checkCompareList($item->id);
            @endphp
            <div class="col-lg-3 col-sm-6 grid-control mb-30 product-card" data-index="{{ $count }}">
                <div class="product-item-2 m-0">
                    <div class="product-item-2-inner wish-buttons-in">
                        <div class="product-thumb">
                            <ul class="wish-react">
                                <li>
                                    <a href="javascript:void(0)" title="@lang('Add To Wishlist')" class="add-to-wish-list {{ $wCk ? 'active' : '' }}" data-id="{{ $item->id }}"><i class="lar la-heart"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="@lang('Compare')" class="add-to-compare {{ $cCk ? 'active' : '' }}" data-id="{{ $item->id }}"><i class="las la-sync-alt"></i></a>
                                </li>
                            </ul>
                            <a href="{{ route('product.detail', ['id' => $item->id, 'slug' => slug($item->name)]) }}">
                                <img src="{{ getImage(imagePath()['product']['path'] . '/thumb_' . @$item->main_image, imagePath()['product']['size']) }}" alt="@lang('flash')">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-before-content">
                                <h6 class="title">
                                    <a href="{{ route('product.detail', ['id' => $item->id, 'slug' => slug($item->name)]) }}">{{ __($item->name) }}</a>
                                </h6>
                                <h6 class="title mt-1">
                                    @lang('Brand') : {{ __($item->brand->name) }}
                                </h6>
                                <div class="single_content">
                                    <p>@php echo __($item->summary) @endphp</p>
                                </div>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        @php echo __(display_avg_rating($item->reviews)) @endphp
                                    </div>
                                    <span class="ml-2 mr-auto">({{ __($item->reviews->count()) }})</span>
                                    <div class="price">
                                        @if($discount > 0)
                                            {{ $general->cur_sym }}{{ getAmount($item->base_price - $discount, 2) }}
                                            <del>{{ getAmount($item->base_price, 2) }}</del>
                                        @else
                                            {{ $general->cur_sym }}{{ getAmount($item->base_price, 2) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="product-after-content">
                                <button data-product="{{ $item->id }}" class="cmn-btn btn-sm quick-view-btn">
                                    @lang('View')
                                </button>
                                <div class="price">
                                    @if($discount > 0)
                                        {{ $general->cur_sym }}{{ getAmount($item->base_price - $discount, 2) }}
                                        <del>{{ getAmount($item->base_price, 2) }}</del>
                                    @else
                                        {{ $general->cur_sym }}{{ getAmount($item->base_price, 2) }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php $count++; @endphp
        @endforeach
    </div>
</div>

<div class="section-header-2 my-4 text-center" style="align-items: center; justify-content: center;">
    <button class="custom-button theme btn-sm" id="view-more-btn">@lang('View More')</button>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 8;
    const products = document.querySelectorAll('.product-card');
    const viewMoreBtn = document.getElementById('view-more-btn');

    // Initially hide all products beyond the first 8
    products.forEach((product, index) => {
        if (index >= 8) {
            product.style.display = 'none';
        }
    });

    // Show more products on button click
    viewMoreBtn.addEventListener('click', function() {
        let nextIndex = currentIndex + 8;
        for (let i = currentIndex; i < nextIndex && i < products.length; i++) {
            products[i].style.display = 'block';
        }
        currentIndex = nextIndex;
        if (currentIndex >= products.length) {
            viewMoreBtn.style.display = 'none'; // Hide button if all products are shown
        }
    });
});

</script>

