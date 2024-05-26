@php
    $footer    = getContent('footer.content', true);
    if($footer)
    $footer    =$footer->data_values
@endphp

  <!-- Footer Section Starts Here -->
  <footer class="bg-3">
    <div class="container">
        <div class="footer-bottom">
            <div class="footer-widget widget-about">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="w-100 h-auto" src="{{getImage(imagePath()['logoIcon']['path'] .'/logo_2.png')}}" alt="@lang('logo')">
                    </a>
                </div>
                <p>@lang(@$footer->footer_note)</p>

            </div>
            <div class="footer-widget widget-link">
                <h5 class="title cl-white">@lang('Pages')</h5>
                <ul>
                    @if($pages->count() > 0)
                        @foreach ($pages as $item)
                            <li><a href="{{route('pages', ['id' => $item->id, 'slug'=> slug($item->data_values->page_title) ])}}">@php echo __($item->data_values->page_title) @endphp</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="footer-widget widget-link">
                <h5 class="title cl-white">@lang('Useful link')</h5>
                <ul>
                    <li><a href="{{route('about_us')}}">@lang('About Us')</a></li>
                    <li><a href="{{route('contact')}}">@lang('Contact Us')</a></li>
                    <li><a href="{{route('faqs')}}">@lang('FAQ')</a></li>
                    <li><a href="{{route('order-track')}}">@lang('Track Your Order')</a></li>
                </ul>
            </div>

            <div class="footer-widget widget-link widget-contact">
                <h5 class="title cl-white">@lang('Contact Us')</h5>
                <ul>
                    <li>
                        <i class="las la-map-marker"></i>
                        {{ __(@$footer->contact_address) }}
                    </li>
                    <li>
                        <a href="Tel:{{ @$footer->cell_number }}"><i class="las la-phone"></i>{{ @$footer->cell_number }}</a>
                    </li>
                    <li>
                        <a href="mailto:{{ @$footer->email }}"><i class="las la-envelope"></i>{{ @$footer->email }}</a>
                    </li>
                </ul>
            </div>


        </div>
        <div class="footer-copyright">
            <div class="copyright-area d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <p>{{ __(@$footer->copyright_text) }}</p>
                </div>
                <ul class="social-icons">
                    @php
                        $socials    = getContent('social_icon.element');
                    @endphp

                    @if($socials->count() >0)
                        @foreach ($socials as $item)
                        <li>
                            <a href="{{ $item->data_values->url }}">
                                @php
                                    echo $item->data_values->social_icon
                                @endphp
                            </a>
                        </li>
                        @endforeach
                    @endif
                </ul>
                <div class="right">
                    @isset($footer->payment_methods)
                    <img src="{{ getImage('assets/images/frontend/footer/'.@$footer->payment_methods, "250x30")}}" alt="@lang('footer')">
                    @endisset
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ends Here -->
<div class="hfe-before-footer-wrap">
    <div class='footer-width-fixer'>
        <div data-elementor-type="wp-post" data-elementor-id="115" class="elementor elementor-115">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1459c6df elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="1459c6df" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5cc2f764 exad-glass-effect-no exad-sticky-section-no" data-id="5cc2f764" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fb97646 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="fb97646" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet" href="https://ridersgroupbd.com/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Reach Us</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5c0b783b exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="5c0b783b" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Md. Towhidur Rahman (C.E.O)</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3199c471 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-text-editor" data-id="3199c471" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>
                                        <span style="font-size: 14pt;">
                                            <strong>RIDERS Star Group Ltd.</strong>
                                        </span>
                                    </p>
                                    <p>3/A, Fair Plaza, Level-10 Mirpur-1, Dhaka-1216</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-321cc8e2 elementor-widget-divider--view-line exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-divider" data-id="321cc8e2" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1f3c40cc exad-glass-effect-no exad-sticky-section-no" data-id="1f3c40cc" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-5af6b793 elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="5af6b793" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d7c3976 exad-glass-effect-no exad-sticky-section-no" data-id="1d7c3976" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-49967e95 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-box" data-id="49967e95" data-element_type="widget" data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>Call Us						</span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">
                                                                +88 01989 699 314 <br>+88 01760 411 499					
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-776d7557 exad-glass-effect-no exad-sticky-section-no" data-id="776d7557" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-542afe1e elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="542afe1e" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-share-alt"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Share Us</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1214ba2b e-grid-align-left elementor-shape-rounded elementor-grid-0 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-social-icons" data-id="1214ba2b" data-element_type="widget" data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.21.0 - 15-04-2024 */
                                                        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                            line-height: 1;
                                                            font-size: 0
                                                        }

                                                        .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                            display: inline-grid
                                                        }

                                                        .elementor-widget-social-icons .elementor-grid {
                                                            grid-column-gap: var(--grid-column-gap,5px);
                                                            grid-row-gap: var(--grid-row-gap,5px);
                                                            grid-template-columns: var(--grid-template-columns);
                                                            justify-content: var(--justify-content,center);
                                                            justify-items: var(--justify-content,center)
                                                        }

                                                        .elementor-icon.elementor-social-icon {
                                                            font-size: var(--icon-size,25px);
                                                            line-height: var(--icon-size,25px);
                                                            width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
                                                            height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
                                                        }

                                                        .elementor-social-icon {
                                                            --e-social-icon-icon-color: #fff;
                                                            display: inline-flex;
                                                            background-color: #69727d;
                                                            align-items: center;
                                                            justify-content: center;
                                                            text-align: center;
                                                            cursor: pointer
                                                        }

                                                        .elementor-social-icon i {
                                                            color: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon svg {
                                                            fill: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon:last-child {
                                                            margin: 0
                                                        }

                                                        .elementor-social-icon:hover {
                                                            opacity: .9;
                                                            color: #fff
                                                        }

                                                        .elementor-social-icon-android {
                                                            background-color: #a4c639
                                                        }

                                                        .elementor-social-icon-apple {
                                                            background-color: #999
                                                        }

                                                        .elementor-social-icon-behance {
                                                            background-color: #1769ff
                                                        }

                                                        .elementor-social-icon-bitbucket {
                                                            background-color: #205081
                                                        }

                                                        .elementor-social-icon-codepen {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-delicious {
                                                            background-color: #39f
                                                        }

                                                        .elementor-social-icon-deviantart {
                                                            background-color: #05cc47
                                                        }

                                                        .elementor-social-icon-digg {
                                                            background-color: #005be2
                                                        }

                                                        .elementor-social-icon-dribbble {
                                                            background-color: #ea4c89
                                                        }

                                                        .elementor-social-icon-elementor {
                                                            background-color: #d30c5c
                                                        }

                                                        .elementor-social-icon-envelope {
                                                            background-color: #ea4335
                                                        }

                                                        .elementor-social-icon-facebook,.elementor-social-icon-facebook-f {
                                                            background-color: #3b5998
                                                        }

                                                        .elementor-social-icon-flickr {
                                                            background-color: #0063dc
                                                        }

                                                        .elementor-social-icon-foursquare {
                                                            background-color: #2d5be3
                                                        }

                                                        .elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-github {
                                                            background-color: #333
                                                        }

                                                        .elementor-social-icon-gitlab {
                                                            background-color: #e24329
                                                        }

                                                        .elementor-social-icon-globe {
                                                            background-color: #69727d
                                                        }

                                                        .elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g {
                                                            background-color: #dd4b39
                                                        }

                                                        .elementor-social-icon-houzz {
                                                            background-color: #7ac142
                                                        }

                                                        .elementor-social-icon-instagram {
                                                            background-color: #262626
                                                        }

                                                        .elementor-social-icon-jsfiddle {
                                                            background-color: #487aa2
                                                        }

                                                        .elementor-social-icon-link {
                                                            background-color: #818a91
                                                        }

                                                        .elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in {
                                                            background-color: #0077b5
                                                        }

                                                        .elementor-social-icon-medium {
                                                            background-color: #00ab6b
                                                        }

                                                        .elementor-social-icon-meetup {
                                                            background-color: #ec1c40
                                                        }

                                                        .elementor-social-icon-mixcloud {
                                                            background-color: #273a4b
                                                        }

                                                        .elementor-social-icon-odnoklassniki {
                                                            background-color: #f4731c
                                                        }

                                                        .elementor-social-icon-pinterest {
                                                            background-color: #bd081c
                                                        }

                                                        .elementor-social-icon-product-hunt {
                                                            background-color: #da552f
                                                        }

                                                        .elementor-social-icon-reddit {
                                                            background-color: #ff4500
                                                        }

                                                        .elementor-social-icon-rss {
                                                            background-color: #f26522
                                                        }

                                                        .elementor-social-icon-shopping-cart {
                                                            background-color: #4caf50
                                                        }

                                                        .elementor-social-icon-skype {
                                                            background-color: #00aff0
                                                        }

                                                        .elementor-social-icon-slideshare {
                                                            background-color: #0077b5
                                                        }

                                                        .elementor-social-icon-snapchat {
                                                            background-color: #fffc00
                                                        }

                                                        .elementor-social-icon-soundcloud {
                                                            background-color: #f80
                                                        }

                                                        .elementor-social-icon-spotify {
                                                            background-color: #2ebd59
                                                        }

                                                        .elementor-social-icon-stack-overflow {
                                                            background-color: #fe7a15
                                                        }

                                                        .elementor-social-icon-steam {
                                                            background-color: #00adee
                                                        }

                                                        .elementor-social-icon-stumbleupon {
                                                            background-color: #eb4924
                                                        }

                                                        .elementor-social-icon-telegram {
                                                            background-color: #2ca5e0
                                                        }

                                                        .elementor-social-icon-threads {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-thumb-tack {
                                                            background-color: #1aa1d8
                                                        }

                                                        .elementor-social-icon-tripadvisor {
                                                            background-color: #589442
                                                        }

                                                        .elementor-social-icon-tumblr {
                                                            background-color: #35465c
                                                        }

                                                        .elementor-social-icon-twitch {
                                                            background-color: #6441a5
                                                        }

                                                        .elementor-social-icon-twitter {
                                                            background-color: #1da1f2
                                                        }

                                                        .elementor-social-icon-viber {
                                                            background-color: #665cac
                                                        }

                                                        .elementor-social-icon-vimeo {
                                                            background-color: #1ab7ea
                                                        }

                                                        .elementor-social-icon-vk {
                                                            background-color: #45668e
                                                        }

                                                        .elementor-social-icon-weibo {
                                                            background-color: #dd2430
                                                        }

                                                        .elementor-social-icon-weixin {
                                                            background-color: #31a918
                                                        }

                                                        .elementor-social-icon-whatsapp {
                                                            background-color: #25d366
                                                        }

                                                        .elementor-social-icon-wordpress {
                                                            background-color: #21759b
                                                        }

                                                        .elementor-social-icon-x-twitter {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-xing {
                                                            background-color: #026466
                                                        }

                                                        .elementor-social-icon-yelp {
                                                            background-color: #af0606
                                                        }

                                                        .elementor-social-icon-youtube {
                                                            background-color: #cd201f
                                                        }

                                                        .elementor-social-icon-500px {
                                                            background-color: #0099e5
                                                        }

                                                        .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                            border-radius: 10%
                                                        }

                                                        .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                            border-radius: 50%
                                                        }
                                                    </style>
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-d47f62d" href="https://www.facebook.com/Rgroup.bd/" target="_blank">
                                                                <span class="elementor-screen-only">Facebook</span>
                                                                <i class="fab fa-facebook"></i>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-247b057" href="https://www.youtube.com/channel/UCPwUBeHoUT1OoQGrzUanrjw" target="_blank">
                                                                <span class="elementor-screen-only">Youtube</span>
                                                                <i class="fab fa-youtube"></i>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-shopping-cart elementor-repeater-item-2785fae" href="https://www.orababa.com/" target="_blank">
                                                                <span class="elementor-screen-only">Shopping-cart</span>
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-575b9be" href="https://www.facebook.com/2octopusgroupbd/" target="_blank">
                                                                <span class="elementor-screen-only">Facebook</span>
                                                                <i class="fab fa-facebook"></i>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-c6f14a4" href="https://www.youtube.com/channel/UCL1J39ZCMYCOCwBn6NYgVEg" target="_blank">
                                                                <span class="elementor-screen-only">Youtube</span>
                                                                <i class="fab fa-youtube"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-31efe9d1 elementor-widget-divider--view-line exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-divider" data-id="31efe9d1" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6079fb56 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="6079fb56" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="far fa-envelope"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Send E-mail</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
    <div class='footer-width-fixer'>
        <div data-elementor-type="wp-post" data-elementor-id="140" class="elementor elementor-140">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-865ce51 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="865ce51" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4eb503a2 exad-glass-effect-no exad-sticky-section-no" data-id="4eb503a2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-65d90d50 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="65d90d50" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Company</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-39971a03 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="39971a03" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/about-us/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Who We Are</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Distributor Enquiry Form</span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Testimonial</span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/video-gallery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Corporate Video</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Sitemap</span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/contact-us/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4288e818 exad-glass-effect-no exad-sticky-section-no" data-id="4288e818" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-214e3ffc exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="214e3ffc" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Products</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5ff08292 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="5ff08292" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Machinery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4ac329be elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="4ac329be" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/apparel-textile-machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Apparel & Textile Machinery</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/food-beverage-machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Food & Beverage Machinery</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/packaging-machines/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Packaging Machines</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/plastic-rubber-processing-machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Plastic & Rubber Processing Machinery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4012f7fb elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="4012f7fb" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/consumer-electronics/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Consumer Electronics</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-699c7236 exad-glass-effect-no exad-sticky-section-no" data-id="699c7236" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-15b29455 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="15b29455" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/apparel/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Apparel</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/vehicle-parts-accessories/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Vehicle Parts & Accessories</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/sports-entertainment/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Sports & Entertainment</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/home-garden/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Home & Garden</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/beauty-personal-care/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Beauty & Personal Care</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-61bd0b3 elementor-align-left exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button" data-id="61bd0b3" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="https://ridersgroupbd.com/shop/">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-left">
                                                    <i aria-hidden="true" class="fas fa-plus"></i>
                                                </span>
                                                <span class="elementor-button-text">View All</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3b64989d exad-glass-effect-no exad-sticky-section-no" data-id="3b64989d" data-element_type="column">
                        <div class="elementor-widget-wrap"></div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-5eef3f96 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="5eef3f96" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36ee46dd exad-glass-effect-no exad-sticky-section-no" data-id="36ee46dd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-23a3c23 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-copyright" data-id="23a3c23" data-element_type="widget" data-widget_type="copyright.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-copyright-wrapper">
                                        <span>Copyright © 2024 RIDERS Star Group Ltd. | Powered by RIDERS Star Group Ltd.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-177f8573 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-copyright" data-id="177f8573" data-element_type="widget" data-widget_type="copyright.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-copyright-wrapper">
                                        <a href="https://f3solution.com/">
                                            <span>Design &amp;Development by F3 Solution</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-44ee3cf0 exad-glass-effect-no exad-sticky-section-no" data-id="44ee3cf0" data-element_type="column">
                        <div class="elementor-widget-wrap"></div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-324513d1 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="324513d1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-5377f76b exad-glass-effect-no exad-sticky-section-no" data-id="5377f76b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7797b186 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon" data-id="7797b186" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <a class="elementor-icon" href="https://ridersgroupbd.com/">
                                            <i aria-hidden="true" class="fas fa-home"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5b711e2 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="5b711e2" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <a href="https://ridersgroupbd.com/">Home</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-49d7e838 exad-glass-effect-no exad-sticky-section-no" data-id="49d7e838" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c8fb569 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon" data-id="c8fb569" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <a class="elementor-icon" href="https://ridersgroupbd.com/about-us/">
                                            <i aria-hidden="true" class="fas fa-user"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7adfc4cf exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="7adfc4cf" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <a href="https://ridersgroupbd.com/about-us/">Profile</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-4ad01351 exad-glass-effect-no exad-sticky-section-no" data-id="4ad01351" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7d622112 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon" data-id="7d622112" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <a class="elementor-icon" href="https://ridersgroupbd.com/shop/">
                                            <i aria-hidden="true" class="fas fa-th"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3f57f53f exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="3f57f53f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <a href="https://ridersgroupbd.com/shop/">Our Products</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-118f4bf2 exad-glass-effect-no exad-sticky-section-no" data-id="118f4bf2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7cc3817a elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon" data-id="7cc3817a" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <a class="elementor-icon" href="https://ridersgroupbd.com/contact-us/">
                                            <i aria-hidden="true" class="far fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-71d91351 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="71d91351" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <a href="https://ridersgroupbd.com/contact-us/">Contact Us</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-4ab3c8c8 exad-glass-effect-no exad-sticky-section-no" data-id="4ab3c8c8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1214e242 elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon" data-id="1214e242" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <a class="elementor-icon" href="tel:+88%2001989%20699%20314">
                                            <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-156767f0 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="156767f0" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <a href="tel:+88%2001989%20699%20314">Call Us</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</footer>
</div>

<div class="modal fade" id="quickView">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="ajax-loader-wrapper d-flex align-items-center justify-content-center">
                    <div class="spinner-border" role="status">
                      <span class="sr-only">@lang('Loading')...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo" style="background-color: #ff6900; color:#ffffff!important" class="p-5">
    <div class='d-flex'>
        <div data-elementor-type="wp-post" data-elementor-id="140" class="elementor elementor-140">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-865ce51 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="865ce51" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4eb503a2 exad-glass-effect-no exad-sticky-section-no" data-id="4eb503a2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-65d90d50 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="65d90d50" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Company</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-39971a03 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="39971a03" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/about-us/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Who We Are</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Distributor Enquiry Form</span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Testimonial</span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/video-gallery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Corporate Video</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                            </span>
                                            <span class="elementor-icon-list-text">Sitemap</span>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/contact-us/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4288e818 exad-glass-effect-no exad-sticky-section-no" data-id="4288e818" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-214e3ffc exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading" data-id="214e3ffc" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Products</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5ff08292 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="5ff08292" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Machinery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4ac329be elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="4ac329be" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/apparel-textile-machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Apparel & Textile Machinery</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/food-beverage-machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Food & Beverage Machinery</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/packaging-machines/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Packaging Machines</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/machinery/plastic-rubber-processing-machinery/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Plastic & Rubber Processing Machinery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4012f7fb elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="4012f7fb" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/consumer-electronics/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Consumer Electronics</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-699c7236 exad-glass-effect-no exad-sticky-section-no" data-id="699c7236" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-15b29455 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list" data-id="15b29455" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/apparel/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Apparel</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/vehicle-parts-accessories/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Vehicle Parts & Accessories</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/sports-entertainment/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Sports & Entertainment</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/home-garden/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Home & Garden</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="https://ridersgroupbd.com/product-category/beauty-personal-care/">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Beauty & Personal Care</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-61bd0b3 elementor-align-left exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button" data-id="61bd0b3" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="https://ridersgroupbd.com/shop/">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-left">
                                                    <i aria-hidden="true" class="fas fa-plus"></i>
                                                </span>
                                                <span class="elementor-button-text">View All</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3b64989d exad-glass-effect-no exad-sticky-section-no" data-id="3b64989d" data-element_type="column">
                        <div class="elementor-widget-wrap"></div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-5eef3f96 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no" data-id="5eef3f96" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36ee46dd exad-glass-effect-no exad-sticky-section-no" data-id="36ee46dd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-23a3c23 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-copyright" data-id="23a3c23" data-element_type="widget" data-widget_type="copyright.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-copyright-wrapper">
                                        <span>Copyright © 2024 RIDERS Star Group Ltd. | Powered by RIDERS Star Group Ltd.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-177f8573 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-copyright" data-id="177f8573" data-element_type="widget" data-widget_type="copyright.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-copyright-wrapper">
                                        <a href="https://f3solution.com/">
                                            <span>Design &amp;Development by F3 Solution</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-44ee3cf0 exad-glass-effect-no exad-sticky-section-no" data-id="44ee3cf0" data-element_type="column">
                        <div class="elementor-widget-wrap"></div>
                    </div>
                </div>
            </section>
            
        </div>
    </div>
</footer>


