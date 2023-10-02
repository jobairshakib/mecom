@php
    $sliders = App\Models\Slider::orderBy('slider_title','ASC')->get();
@endphp

<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
        @foreach($sliders as $slider)
        <div class="item-slide">
            <img src="{{asset("$slider->slider_image")}}" alt="" class="img-slide">
            <div class="slide-info slide-1">
                <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                <a href="#" class="btn-link">Shop Now</a>
            </div>
        </div>
        @endforeach


    </div>
</div>
