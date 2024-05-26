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
    .background-gray{
        background-color: #f5f5f5!important;
    }
</style>
<div class=" mt-3 background-gray" >
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
                    <div class="pb-3 text-center m-uto" >
                        <h3 class="text-center" >About Us</h3>
                        <div class="d-flex justify-content-center align-items-center">
                            <div style="border-top: 3px solid #000; width: 10%;"></div>
                            <div style="border-top: 3px solid #000; width: 10%;"></div>
                        </div>
                    </div>
                    <div class="px-4">
                        <style>
                            .text-color {
                                color: #ff6900 !important;
                            }
    
                            .text-color:hover {
                                color: #f79a59 !important;
                            }
                            .text-size{
                                font-size: 18px;
                            }
                        </style>
                        <p>
                            <a href="http://Machine price in Bangladesh" target="_blank" rel="noopener"
                                class="text-color text-size pt-3">R.Riders Group Ltd</a>
                            <br />
                            <a href="https://www.facebook.com/2octopusgroupbd" target="_blank" rel="noopener"
                                class="text-color text-size">Riders imports &amp; supplier</a>
                            <br />
                            <p class="justify-content text-size" style="text-align: justify; text-justify: inter-word;">products Sourcing, Buy, payment, Lc, Door to Door service.<br />
                            installation, services warranty, Training extra<br />we give you all in all solutions
                            of every imported product and machinery. Machine price in Bangladesh.</p>
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="pb-3 text-center">
                        <h3 class="text-center">Why Us</h3>
                        <div class="d-flex justify-content-center align-items-center">
                            <div style="border-top: 3px solid #000; width: 12%;"></div>
                            <div style="border-top: 3px solid #000; width: 12%;"></div>
                        </div>
                    </div>
                    <div class="px-4">
                        <ul style="list-style-type: circle;" class="">
                            <li style="list-style-type: circle;">
                                <a href="http://Riders Import &amp; Export" target="_blank" rel="noopener"
                                    class="text-color text-size">মেশিন</a>
                                আমরাই সেটাপ করে দিবো আপনার লোকেশনে,
                            </li>
                            <li style="list-style-type: circle;" class="text-size">মেশিনের সাথে আপনি ফ্রি ট্রেনিং পাবেন,</li>
                            <li style="list-style-type: circle;" class="text-size">
                                মেশিন/পন্য গোডাউন থেকে নেওয়ার ভাড়া / ট্রান্সপোর্ট আপনাকেই দিতে হবে,<br />মেশিনে
                                আপনি ১ বছর পর্যন্ত ওয়ারেন্টি পাবেন,
                            </li>
                            <li style="list-style-type: circle;" class="text-size">মেশিনে আপনি ২ বছর পর্যন্ত ফ্রি সার্ভিসিং পাবেন,</li>
                            <li style="list-style-type: circle;" class="text-size">সার্ভিসিং এ আমাদের লোক যাবে, তাদের TA (ট্রাভেলিং ভাড়া) দিতে হবে।</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container mt-3" >
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
                    class="d-block text-center mx-1 my-2 p-1 py-3 align-items-center justify-content-center img-hover"
                    style="border: 3px solid #ff6900; height: 180px">
                    <div class="mb-10 oh rounded align-items-center justify-content-center m-auto"
                        style="width: 100px; height:90px">
                        <img src="{{ getImage(imagePath()['category']['path'] . '/' . @$item->image, imagePath()['category']['size']) }}"
                            class="w-100 " alt="@lang('products-hot')" style="color: #ff6900!important;">
                    </div>
                    <span class="line-limitation- text-dark" style="font-size: 18px; font-weight: bold;">{{ __($item->name) }}</span>
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
