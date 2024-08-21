<div class="banner-item {{ $atts['class'] ?? '' }}">
    <div class="banner-image w-100">
        <img src="{{ $atts['image'] ?? asset('main/assets/images/banner_1.webp') }}"/>
    </div>
    <div class="banner-box">
        <h2 class="banner-title wow" data-wow-delay=".1s">
            {!!  $atts['title'] ?? '' !!}
        </h2>
        <p class="banner-description wow" data-wow-delay=".2s">
            {!! $content !!}
        </p>
        <a class="shop-link wow" href="#" data-wow-delay=".3s">
            <span>SHOP NOW</span>
            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.0895996 10.5H21.9103M21.9103 10.5C21.9103 10.5 17.704 9.34615 15.1802 6.65385C12.6564 3.96154 12.6564 0.5 12.6564 0.5M21.9103 10.5C21.9103 10.5 17.7437 11.6538 15.2437 14.3462C12.7437 17.0385 12.7437 20.5 12.7437 20.5"
                    stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"/>
            </svg>
        </a>
    </div>
    <p class="banner-title-preview">{!!  $atts['title'] ?? '' !!}</p>
</div>
