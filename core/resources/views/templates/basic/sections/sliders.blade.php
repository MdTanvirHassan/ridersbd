@php
    $sliders = getContent('sliders.element');
@endphp

<style>
    .image-container {   
        width: 100vw !important;  
        /* height: 350px!important; */
        overflow: hidden; 
    }

    .image-container img {
        width: 50vw!important;
        height: 70vh!important;
        object-fit: fill!important;   
    }
    .banner-section,.banner-slider ,.owl-theme ,.owl-carousel {
        padding: 0;
        margin: 0;
        overflow: hidden;
    }
    .owl-item{
        width: 35vw!important;
        height: 70vh!important;
        object-fit: fill !important;
        padding: 0%!important;
    }
    @media only screen and (max-width: 600px) {
        .image-container {   
            width: 100vw !important;  
            /* height: 350px!important; */
            overflow: hidden!important; 

        }

        .image-container img {
                width: 100vw!important;
                height: 40vh!important;
                object-fit: fill!important;   
            }
            .owl-item{
                width: 100vw!important;
                height: 50vh!important;
                object-fit: fill !important;
                padding: 0%!important;
                overflow: hidden!important;
            }
        }
</style>

@if($sliders && $sliders->count() > 0)
<div class="banner-section oh rounded--5 mb-30 justify-content-center align-items-center" >
    <div class="banner-slider owl-theme owl-carousel">
        @foreach ($sliders as $slider)
        <a href="{{ @$slider->data_values->link }}" class="d-block" >
            <div class="slide-item image-container">
                    <img src="{{ getImage('assets/images/frontend/sliders/'. @$slider->data_values->slider, '1220x750') }}" alt="@lang('slider')"  class="image-size">
                </div>
            </a>
        @endforeach
    </div>
    <div class="slide-progress"></div>
</div>
@endif

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    autoplayTimeout: 100,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

</script>