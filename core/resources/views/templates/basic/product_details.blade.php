@extends($activeTemplate .'layouts.master')

@section('content')
<style>
    .background-gray{
        background-color: #f5f5f5!important;
    }
    @media (min-width: 992px) {
    .padding-bottom-half {
        padding-bottom: 0px;
    }
}
</style>

<!-- Product Single Section Starts Here -->
<div class="category-section padding-bottom-half padding-top oh background-gray">
    <div class="container">
        <div class="row product-details-wrapper">
            <div class="col-lg-5 variant-images">
                <div class="sync1 owl-carousel owl-theme">
                    @if($images->count() == 0)
                        <div class="thumbs">
                            <img class="zoom_img"
                                src="{{ getImage(imagePath()['product']['path'].'/'.@$product->main_image, imagePath()['product']['size']) }}" alt="@lang('products-details')">
                        </div>
                    @else
                        @foreach ($images as $item)

                        <div class="thumbs">
                            <img class="zoom_img"
                                src="{{ getImage(imagePath()['product']['path'].'/'.@$item->image, imagePath()['product']['size']) }}" alt="@lang('products-details')">
                        </div>
                        @endforeach
                    @endif
                </div>

                <div class="sync2 owl-carousel owl-theme mt-2">
                    @if($images->count() > 1)
                        @foreach ($images as $item)
                        <div class="thumbs">
                            <img src="{{ getImage(imagePath()['product']['path'].'/thumb_'.@$item->image, imagePath()['product']['size']) }}" alt="@lang('products-details')">
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>


            <div class="col-lg-7 bg-white p-4">
                <div class="product-details-content product-details">
                    <h4 class="title">{{__($product->name)}}</h4>

                    <div class="ratings-area justify-content-between">
                        <div class="ratings">
                            @php echo __(display_avg_rating($product->reviews)) @endphp
                        </div>
                        <span class="ml-2 mr-auto">({{__($product->reviews->count())}})</span>
                    </div>
                    <a href="#">
                        <span class="elementor-icon-list-icon">
                            <i aria-hidden="true" class="far fa-file-pdf text-danger"></i>						
                        </span>
                         <span class="text-dark">Product Brochure</span>
                    </a>
                    @if($product->show_in_frontend && $product->track_inventory)
                    @php $quantity = $product->stocks->sum('quantity'); @endphp
                    <div class="badge badge--{{$quantity>0?'success':'danger'}} stock-status">@lang('In Stock') (<span class="stock-qty">{{$quantity}}</span>)</div>
                    @endif

                    <div class="price">
                        @if($discount > 0)
                            {{ $general->cur_sym }}<span class="special_price">{{ getAmount($product->base_price - $discount) }}</span>
                            <del>{{ $general->cur_sym }}</del><del class="price-data">{{ getAmount($product->base_price) }}</del>
                        @else
                            {{ $general->cur_sym }}<span class="price-data">{{ getAmount($product->base_price) }}</span>
                        @endif
                    </div>

                    <p>
                        @php echo __($product->summary) @endphp
                    </p>

                    @forelse ($attributes as $attr)

                    @php $attr_data = getProuductAttributes($product->id, $attr->product_attribute_id); @endphp
                    @if($attr->productAttribute->type==1)
                    <div class="product-size-area attr-area">
                        <span class="caption">{{ __($attr->productAttribute->name_for_user) }}</span>
                        @foreach ($attr_data as $data)
                        <div class="product-single-size attribute-btn" data-type="1" data-discount={{$discount}} data-ti="{{$product->track_inventory}}" data-attr_count="{{$attributes->count()}}" data-id="{{$data->id}}" data-product_id="{{$product->id}}"  data-price="{{$data->extra_price}}" data-base_price="{{ $product->base_price }}" >{{$data->value}}</div>
                        @endforeach
                    </div>
                    @endif
                    @if($attr->productAttribute->type==2)
                    <div class="product-color-area attr-area">
                        <span class="caption">{{__($attr->productAttribute->name_for_user)}}</span>
                        @foreach ($attr_data as $data)
                        <div class="product-single-color attribute-btn" data-type="2" data-ti="{{$product->track_inventory}}" data-discount={{$discount}} data-attr_count="{{$attributes->count()}}" data-id="{{$data->id}}" data-product_id="{{$product->id}}" data-bg="{{$data->value}}" data-price="{{$data->extra_price}}" data-base_price="{{ $product->base_price }}"></div>
                        @endforeach
                    </div>

                    @endif
                    @if($attr->productAttribute->type==3)
                    <div class="product-color-area attr-area">
                        <span class="caption">{{__($attr->productAttribute->name_for_user)}}</span>
                        @foreach ($attr_data as $data)
                        <div class="product-single-color attribute-btn bg_img" data-type="3" data-ti="{{$product->track_inventory}}" data-discount={{$discount}} data-attr_count="{{$attributes->count()}}" data-id="{{$data->id}}" data-product_id="{{$product->id}}" data-price="{{$data->extra_price}}" data-base_price="{{ $product->base_price }}" data-background="{{ getImage(imagePath()['attribute']['path'].'/'. @$data->value) }}">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    @endforeach

                    <!--<div class="cart-and-coupon mt-3">-->

                    <!--    <div class="attr-data">-->
                    <!--    </div>-->

                    <!--    <div class="cart-plus-minus quantity">-->
                    <!--        <div class="cart-decrease qtybutton dec">-->
                    <!--            <i class="las la-minus"></i>-->
                    <!--        </div>-->
                    <!--        <input type="number" name="quantity" step="1" min="1" value="1" class="integer-validation">-->
                    <!--        <div class="cart-increase qtybutton inc">-->
                    <!--            <i class="las la-plus"></i>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="add-cart">-->
                    <!--        <button type="submit" class="cmn-btn cart-add-btn" data-id="{{ $product->id }}">@lang('Add To Cart')</button>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="specification-wrapper mb-3">
                    @if($product->specification)
                        <h5 class="title">@lang('Specification')</h5>
                        <div class="table-wrapper">
                            <table class="specification-table">
                                @foreach ($product->specification as $item)
                                <tr>
                                    <th>{{ __($item['name']) }}</th>
                                    <td>{{ __($item['value']) }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    @else
                    <div class="alert cl-title alert--base" role="alert">
                        @lang('No Specification For This Product')
                    </div>
                    @endif
                </div>
                    <div>
                        <p>
                            <b>
                                @lang('Categories'):
                            </b>
                            @foreach ($product->categories as $category)
                                <a href="{{ route('products.category', ['id'=>$category->id, 'slug'=>slug($category->name)]) }}">{{ __($category->name) }}</a>
                                @if(!$loop->last)
                                /
                                @endif
                            @endforeach
                        </p>
                        
                        <!--<p>-->
                        <!--    <b>@lang('Model'):</b> {{ __($product->model) }}-->
                        <!--</p>-->
                        <p>
                            <b>@lang('Brand'):</b> {{ __($product->brand->name) }}
                        </p>

                        <!--<p>-->
                        <!--    <b>@lang('SKU'):</b> <span class="product-sku">{{$product->sku??__('Not Available')}}</span>-->
                        <!--</p>-->

                        <p class="product-share">
                            <b>@lang('Share'):</b>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" title="@lang('Facebook')">

                                <i class="fab fa-facebook"></i>
                            </a>

                            <a href="http://pinterest.com/pin/create/button/?url={{urlencode(url()->current()) }}&description={{ __($product->name) }}&media={{ getImage('assets/images/product/'. @$product->main_image) }}" title="@lang('Pinterest')">

                                <i class="fab fa-pinterest-p"></i>
                            </a>

                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title=my share text&amp;summary=dit is de linkedin summary" title="@lang('Linkedin')">

                                <i class="fab fa-linkedin"></i>
                            </a>

                            <a href="https://twitter.com/intent/tweet?text={{ __($product->name) }}%0A{{ url()->current() }}" title="@lang('Twitter')">

                                <i class="fab fa-twitter"></i>
                            </a>
                        </p>
                        @php
                            $wCk = checkWishList($product->id);
                        @endphp
                        <!--<p class="product-details-wishlist">-->
                        <!--    <b>@lang('Add To Wishlist'): </b>-->
                        <!--    <a href="javascript:void(0)" title="@lang('Add To Wishlist')" class="add-to-wish-list {{$wCk?'active':''}}" data-id="{{$product->id}}"><span class="wish-icon"></span></a>-->
                        <!--</p>-->

                        @if($product->meta_keywords)
                        <p>
                            <b>
                                @lang('Tags'):
                            </b>
                            @foreach ($product->meta_keywords as $tag)
                                <a href="">{{ __($tag) }}</a>@if(!$loop->last),@endif
                            @endforeach
                        </p>
                        @endif
                    </div>

                </div>
                <!-- {{-- interest --}} -->
                <!-- Button to trigger modal -->
                <div class="mt-5">
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#interestModal">Yes, I am Interested</button>
</div>

<!-- Modal -->
<div class="modal fade" id="interestModal" tabindex="-1" role="dialog" aria-labelledby="interestModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img decoding="async" class="hfe-site-logo-img elementor-animation-" src="https://ridersgroupbd.com/wp-content/uploads/2022/09/Riders-Star-Group-Ltd-300x260.png" alt="Riders group ltd" style="height: 50px; width:100px">
                <h6 class="modal-title" id="interestModalLabel" style="color:#fd7e14">Connect with "RIDERS Star Group Ltd."</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="interestForm" action="{{ route('submitForm') }}" method="POST">

                    @csrf
                    <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">


                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message (optional)</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter your message (optional)"></textarea>
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>


<!-- {{-- end interest  --}} -->
            </div>
        </div>
    </div>
</div>
<!-- Product Single Section Ends Here -->

<!-- Product Single Section Starts Here -->
<div class="products-description padding-bottom padding-top-half">
    <div class="container">

        <ul class="nav nav-tabs">
            <li>
                <a href="#description" class="active" data-toggle="tab">@lang('Description')</a>
            </li>

            <li>
                <a href="#specification" data-toggle="tab">@lang('Specification')</a>
            </li>

            <li>
                <a href="#video" data-toggle="tab">@lang('Video')</a>
            </li>

            <li>
                <a href="#reviews" data-toggle="tab">@lang('Reviews')({{__($product->reviews->count())}})</a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="description">
                <div class="description-item">
                    @if($product->description)
                    <p>
                        @lang($product->description)
                    </p>

                    @else
                    <div class="alert cl-title alert--base" role="alert">
                        @lang('No Description For This Product')
                    </div>
                    @endif
                </div>

                @if($product->extra_descriptions)
                <div class="description-item">
                    @foreach ($product->extra_descriptions as $item)
                        <h5>{{ __($item['key']) }}</h5>
                        <p>
                            @php
                                echo __($item['value']);
                            @endphp
                        </p>
                    @endforeach
                </div>

                @endif
            </div>
            <div class="tab-pane fade " id="specification">
                <div class="specification-wrapper">
                    @if($product->specification)
                        <h5 class="title">@lang('Specification')</h5>
                        <div class="table-wrapper">
                            <table class="specification-table">
                                @foreach ($product->specification as $item)
                                <tr>
                                    <th>{{ __($item['name']) }}</th>
                                    <td>{{ __($item['value']) }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    @else
                    <div class="alert cl-title alert--base" role="alert">
                        @lang('No Specification For This Product')
                    </div>
                    @endif
                </div>
            </div>

            <div class="tab-pane fade" id="video">
                @if(!empty($product->video_link))
                    @php
                        $embedUrl = convertToEmbedUrl($product->video_link);
                    @endphp
                    <iframe width="560" height="315" src="{{ $embedUrl }}" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                @else
                    <div class="alert cl-title alert--base" role="alert">
                        @lang('No Video For This Product')
                    </div>
                @endif
            </div>

            <div class="tab-pane fade" id="reviews">
                <div class="review-area">

                </div>
            </div>
        </div>
        @if($related_products)
            <div class="related-products mt-5">
                <h5 class="title bold mb-3 mb-lg-4">@lang('Related Products')</h5>
                <div class="m--15 oh">
                    <div class="related-products-slider owl-carousel owl-theme">
                        @foreach ($related_products as $item)

                    @php
                        if($item->offer && $item->offer->activeOffer){
                            $discount_amount = calculateDiscount($item->offer->activeOffer->amount, $item->offer->activeOffer->discount_type, $item->base_price);
                        }else $discount_amount = 0;

                        $wCk = checkWishList($item->id);
                        $cCk = checkCompareList($item->id);
                    @endphp

                    <div class="product-item-2">
                        <div class="product-item-2-inner wish-buttons-in">
                            <ul class="wish-react">
                                <li>
                                <a href="javascript:void(0)" title="@lang('Add To Wishlist')" class="add-to-wish-list {{$wCk?'active':''}}" data-id="{{$item->id}}"><i class="lar la-heart"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="add-to-compare {{$cCk?'active':''}}" data-id="{{$item->id}}"><i class="las la-sync-alt"></i></a>
                                </li>
                            </ul>
                            <div class="product-thumb">
                                <a href="{{route('product.detail', ['id'=>$item->id, 'slug'=>slug($item->name)])}}">
                                    <img src="{{ getImage(imagePath()['product']['path'].'/thumb_'.@$item->main_image, imagePath()['product']['size']) }}" alt="@lang('flash')">
                                </a>
                            </div>

                            <div class="product-content">
                                <div class="product-before-content">
                                    <h6 class="title">
                                        <a href="{{route('product.detail', ['id'=>$item->id, 'slug'=>slug($item->name)])}}">{{ $item->name }}</a>
                                    </h6>
                                    <div class="ratings-area justify-content-between">
                                        <div class="ratings">
                                            @php echo __(display_avg_rating($item->reviews)) @endphp
                                        </div>

                                        <span class="ml-2 mr-auto">({{ __($item->reviews->count()) }})</span>
                                        <div class="price">
                                            @if($discount_amount > 0)
                                            {{ $general->cur_sym }}{{ getAmount($item->base_price - $discount_amount, 2) }}
                                            <del>{{ getAmount($item->base_price, 2) }}</del>
                                            @else
                                            {{ $general->cur_sym }}{{ getAmount($item->base_price, 2) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="product-after-content">
                                    <button data-product="{{$item->id}}" class="cmn-btn btn-sm quick-view-btn">
                                        @lang('View')
                                    </button>
                                    <div class="price">
                                        @if($discount_amount > 0)
                                        {{ $general->cur_sym }}{{ getAmount($item->base_price - $discount_amount, 2) }}
                                        <del>{{ getAmount($item->base_price, 2) }}</del>
                                        @else
                                        {{ $general->cur_sym }}{{ getAmount($item->base_price, 2) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
@endsection

@push('script')
<script>
    // $(document).ready(function() {
    //     $('#interestForm').on('submit', function(e) {
    //         e.preventDefault();
            
    //         // Collect form data
    //         var formData = {
    //             name: $('#name').val(),
    //             email: $('#email').val(),
    //             phone: $('#phone').val(),
    //             message: $('#message').val()
    //         };
            
    //         // Submit form data using AJAX
    //         $.ajax({
    //             type: 'POST',
    //             url: '{{ route("submitForm") }}',
    //             data: formData,
    //             success: function(data) {
    //                 console.log('Form submitted successfully');
    //                 console.log(data);
    //                 // Optionally, close the modal or show a success message
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error('Error submitting form:', error);
    //                 console.error(xhr.responseText);
    //                 // Optionally, display an error message to the user
    //             }
    //         });
    //     });
    // });




    'use strict';
    (function($){
        var pid = '{{ $product->id }}';
        load_data(pid);
        function load_data(pid, url="{{ route('product_review.load_more') }}") {
            $.ajax({
                url: url,
                method: "GET",
                data: { pid: pid },
                success: function (data) {
                    $('#load_more_button').remove();
                    $('.review-area').append(data);
                }
            });
        }
        $(document).on('click', '#load_more_button', function () {
            var id  = $(this).data('id');
            var url = $(this).data('url');
            $('#load_more_button').html(`<b>{{ __('Loading') }} <i class="fa fa-spinner fa-spin"></i> </b>`);
            load_data(pid, url);
        });

    })(jQuery)

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endpush

@push('breadcrumb-plugins')
    <li><a href="{{route('home')}}">@lang('Home')</a></li>
@endpush


@push('meta-tags')
    @include('partials.seo', ['seo_contents'=>@$seo_contents])
@endpush
