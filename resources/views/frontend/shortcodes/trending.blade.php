<section class="trending">
    <div class="trending-first">
        <div class="section-box">
            <div class="decoration">
                <div></div>
            </div>
        </div>
        <div class="container">
            <div class="trending-box box-top wow bounceInUp">
                <div class="tblock-left position-relative">
                    <div class="tblock-information">
                        <h2 class="trending-box-title">
                           {{ $atts['title'] }}
                        </h2>
                        <h2 class="trending-box-sub-title">
                            {{ $atts['sub-title'] }}

                        </h2>
                    </div>
                    <button class="btn-more">
                        <span>Xem thêm</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                            <path d="M0 10H21.8207M21.8207 10C21.8207 10 17.6144 8.84615 15.0906 6.15385C12.5668 3.46154 12.5668 0 12.5668 0M21.8207 10C21.8207 10 17.6541 11.1538 15.1541 13.8462C12.6541 16.5385 12.6541 20 12.6541 20" stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"></path>
                        </svg>
                    </button>
                </div>
                <div class="tblock-right">
                    <img src="{{ $atts['block-image'] }}" alt="{!! $atts['block-title'] !!}">
                    <div class="img-desc">
                        <h2>{!! $atts['block-title'] !!}</h2>
                        <div class="decoration-title d-flex align-center">
                            <div></div>
                        </div>
                        <p>{!! $atts['block-desc'] !!}</p>
                        <a class="view-more wow phone" href="#" data-wow-delay=".3s">
                            <span>Đọc thêm</span>
                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.0895996 10.5H21.9103M21.9103 10.5C21.9103 10.5 17.704 9.34615 15.1802 6.65385C12.6564 3.96154 12.6564 0.5 12.6564 0.5M21.9103 10.5C21.9103 10.5 17.7437 11.6538 15.2437 14.3462C12.7437 17.0385 12.7437 20.5 12.7437 20.5"
                                    stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="trending-box trending-box-item mt-24px pc">
                {!! shortcodes($content) !!}
            </div>
        </div>
    </div>
    <div class="trending-box trending-box-item mt-24px slider phone trending-second">
        {!! shortcodes($content) !!}
    </div>
</section>
