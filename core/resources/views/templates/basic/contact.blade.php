@extends($activeTemplate.'layouts.master')

@section('content')
    @php
        $content = getContent('contact_page.content', true);
    @endphp

<!-- Contact Section Starts Here -->
<div class="contact-section padding-bottom padding-top oh position-relative">
    <div class="container">
        <div class="my-4 text-center" style="margin-top: -60px!important">
            <h3 class="text-center">Contact Us</h3>
            <div class="d-flex justify-content-center align-items-center">
                <div style="border-top: 3px solid #000; width: 10%;"></div>
                <i aria-hidden="true" class="fas fa-star" style="color: #ff6900; margin: 0 10px;"></i>
                <div style="border-top: 3px solid #000; width: 10%;"></div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="contact--thumb">
                    {{-- <img src="{{ getImage('assets/images/frontend/contact_page/'. @$content->data_values->image, '800x964') }}" alt="@lang('login-bg')"> --}}
                    <div class="">
                        <link rel="stylesheet"
                            href="https://ridersgroupbd.com/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                        <ul class="">
                            <li class="" style="font-size: 24px; font-weight: bold">
                                <span class="">
                                    <i aria-hidden="true" class="fas fa-map-marker-alt" style="color: #ff6900"></i>
                                </span>
                                <span class="text-black"> Reach Us</span>
                            </li>
                        </ul>
                        <div class="my-2">
                            <h4 class="text-black title2 pb-1">Md. Towhidur Rahman (C.E.O)</h4>
                        </div>
                        <div class="">
                            <p>
                                <span style="font-size: 14pt;">
                                    <strong class="text-black">RIDERS Star Group Ltd.</strong>
                                </span>
                            </p>
                            <p class="text-black" style="font-size:14px">3/A, Fair Plaza, Level-10 Mirpur-1, Dhaka-1216</p>
                        </div>
                        <div class="mb-5"></div>
                    </div>
                    <div class="">
                        <span class="" style="font-size: 24px; font-weight: bold">
                            <i aria-hidden="true" style="color: #ff6900" class="fas fa-phone-alt"></i>
                        </span>
                        <span class="mb-2 text-black" style="font-size: 24px; font-weight: bold"> Call Us</span>
                        <div class="mt-2 mx-4">
                            <p class="text-black">
                                +88 01989 699 314 <br>+88 01760 411 499
                            </p>
                        </div>
                    </div>
                    <div class="my-5">
                        <ul class="s">
                            <li class="" style="font-size: 24px; font-weight: bold">
                                <span class="">
                                    <i aria-hidden="true" class="far fa-envelope" style="color: #ff6900"></i>
                                </span>
                                <span class="text-black">Send E-mail</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4 mt-md-2">
                        <div class="">
                            <div class="" data-id="542afe1e" data-element_type="widget"
                                data-widget_type="icon-list.default">
                                <div class="">
                                    <ul class="">
                                        <li class="" style="font-size: 24px; font-weight: bold">
                                            <span class="">
                                                <i aria-hidden="true" class="fas fa-share-alt"
                                                    style="color: #ff6900"></i>
                                            </span>
                                            <span class="text-black">Share Us</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1214ba2b e-grid-align-left elementor-shape-rounded elementor-grid-0 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-social-icons"
                                data-id="1214ba2b" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="">
                                    <style>
                                        .elementor-widget-social-icons.elementor-grid-0 .,
                                        .elementor-widget-social-icons.elementor-grid-mobile-0 .,
                                        .elementor-widget-social-icons.elementor-grid-tablet-0 . {
                                            line-height: 1;
                                            font-size: 0
                                        }

                                        .elementor-social-icon {
                                            font-size: 25px;
                                            width: 40px;
                                            height: 40px;
                                            border-radius: 10%;
                                            display: inline-flex;
                                            align-items: center;
                                            justify-content: center;
                                            text-align: center;
                                            cursor: pointer;
                                            margin: 5px;
                                        }

                                        .elementor-social-icon-facebook {
                                            background-color: #3b5998;
                                            color: #ffffff !important;
                                        }

                                        .elementor-social-icon-youtube {
                                            background-color: #cd201f;
                                            color: #ffffff !important;
                                        }

                                        .elementor-social-icon-shopping-cart {
                                            background-color: #05a50d;
                                            color: #ffffff !important;
                                        }
                                        .text-black{
                                            color: #000!important;
                                        }

                                        @media (max-width: 991px) {
                                            body {
                                                padding-bottom: 0px;
                                            }
                                        }
                                    </style>
                                    <div class="elementor-social-icons-wrapper">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook"
                                            href="https://www.facebook.com/Rgroup.bd/" target="_blank">
                                            <i class="fab fa-facebook "></i>
                                        </a>
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube"
                                            href="https://www.youtube.com/channel/UCPwUBeHoUT1OoQGrzUanrjw"
                                            target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-shopping-cart"
                                            href="https://www.orababa.com/" target="_blank">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook"
                                            href="https://www.facebook.com/Rgroup.bd/" target="_blank">
                                            <i class="fab fa-facebook "></i>
                                        </a>
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube"
                                            href="https://www.youtube.com/channel/UCPwUBeHoUT1OoQGrzUanrjw"
                                            target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                @if($content)
                <div class="section-header mb-low left-style">
                    {{-- <h3 class="title">@lang(@$content->data_values->title)</h3>
                    <p>@lang(@$content->data_values->description)</p> --}}

                    <h4 class="" style="color: #ff6900">Connect with "RIDERS Star Group Ltd."</h4>
                </div>
                @endif
                <form method="post" class="contact-form">
                    @csrf
                    <div class="contact-">
                        <label for="name">@lang('Your Name')</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control h-50 bg-light" required>
                    </div>
                    <div class="-group">
                        <label for="email">@lang('Your Email')</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control h-50 bg-light" required>
                    </div>

                    <div class="">
                        <label for="subject">@lang('Your Number')</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" class="form-control h-50 bg-light" required>

                    </div>
                    <div class="contact-grou">
                        <label for="message">@lang('Your message (optional)')</label>
                        <textarea name="message" id="message" class="form-control h-120  bg-light" required>{{ old('message') }}</textarea>
                    </div>
                    <div class="contact-group mb-0 my-2 justify-content-center">
                        <button type="submit" class="cmn-btn h-50">
                            @lang('Send Message')
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!-- Contact Section Ends Here -->
@endsection


@push('breadcrumb-plugins')
    <li><a href="{{route('home')}}">@lang('Home')</a></li>
@endpush


@push('meta-tags')
    @include('partials.seo')
@endpush
