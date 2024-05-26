<!-- Featured Section Starts Here -->
<style>
    .background-gray {
        background-color: #f5f5f5 !important;
        width: 100vw !important;
        padding: 0;
        margin: 0;
    }
</style>
<div class="background-gray">
    <div class="featured-section padding-bottom-half padding-top-half oh ">
        <div class="container">


            <!-- Featured Section Ends Here -->
            <div class="">
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
                            <div class="col-lg-3 col-sm-6 grid-control mb-30 product-card"
                                data-index="{{ $count }}">
                                <div class="product-item-2 m-0 bg-white">
                                    <div class="product-item-2-inner wish-buttons-in">
                                        <div class="product-thumb">
                                            <ul class="wish-react">
                                                <li>
                                                    <a href="javascript:void(0)" title="@lang('Add To Wishlist')"
                                                        class="add-to-wish-list {{ $wCk ? 'active' : '' }}"
                                                        data-id="{{ $item->id }}"><i class="lar la-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" title="@lang('Compare')"
                                                        class="add-to-compare {{ $cCk ? 'active' : '' }}"
                                                        data-id="{{ $item->id }}"><i
                                                            class="las la-sync-alt"></i></a>
                                                </li>
                                            </ul>
                                            <a
                                                href="{{ route('product.detail', ['id' => $item->id, 'slug' => slug($item->name)]) }}">
                                                <img src="{{ getImage(imagePath()['product']['path'] . '/thumb_' . @$item->main_image, imagePath()['product']['size']) }}"
                                                    alt="@lang('flash')">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-before-content">
                                                <h6 class="title">
                                                    <a
                                                        href="{{ route('product.detail', ['id' => $item->id, 'slug' => slug($item->name)]) }}">{{ __($item->name) }}</a>
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
                                                    <span
                                                        class="ml-2 mr-auto">({{ __($item->reviews->count()) }})</span>
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
                                                <button data-product="{{ $item->id }}"
                                                    class="cmn-btn btn-sm quick-view-btn">
                                                    @lang('View')
                                                </button>
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
            </div>
        </div>
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
