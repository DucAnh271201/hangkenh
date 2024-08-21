@if($products->isNotEmpty())
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
    <section class="section-5">
        <div class="swiper trending-slide pc">
            <div class="swiper-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide ms-2">
                        <div class="swiper-wrapper">
                            <div class="row">
                                <div class="col-9">
                                    <video id="content_video_{{ $product->id }}" class="video-js vjs-default-skin video-js-pc"
                                           controls preload="auto" poster="{{asset('main/assets/images/introduce-video.png')}}">
                                        <source src="https://youtu.be/wp90u2BtxVI?si=lpj-Ebc7kr_5dqMF"
                                                type="video/youtube" />
                                    </video>
                                </div>
                                <div class="col-3">
                                    <div class="position-relative">
                                        <img src="{{ get_media($product, 'feature_image', 'image') }}"
                                             alt="{{ $product->title ?? '' }}">
                                        <div class="img-title d-flex flex-column" style="gap: 8px">
                                            <a href="{{ get_permalink($product) }}">
                                                <h4 class="title">{{ $product->title ?? '' }}</h4>
                                            </a>
                                            <p class="desc">{{ get_main_category($product->categories)->title ?? '' }}</p>
                                            <p class="price">${{ number_format($product->regular_price) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="swiper-pagination pc"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev pc">
            </div>
            <div class="swiper-button-next pc"></div>
        </div>
        <div class="trending-slide-phone phone">
            @foreach($products as $product)
                <div class="trending-item">
                    <div class="trending-item-image">
                        <video id="content_video_m{{ $product->id }}" class="video-js vjs-default-skin video-js-mobile"
                               controls preload="auto" poster="{{asset('main/assets/images/introduce-video.png')}}">
                            <source src="https://youtu.be/wp90u2BtxVI?si=lpj-Ebc7kr_5dqMF"
                                    type="video/youtube" />
                        </video>
                    </div>
                    <div class="trending-item-content">
                        <div class="position-relative">
                            <img src="{{ get_media($product, 'feature_image', 'image') }}"
                                 alt="{{ $product->title ?? '' }}">
                            <div class="img-title d-flex flex-column" style="gap: 8px">
                                <a href="{{ get_permalink($product) }}">
                                    <h4 class="title">{{ $product->title ?? '' }}</h4>
                                </a>
                                <p class="desc">{{ get_main_category($product->categories)->title ?? '' }}</p>
                                <p class="price">${{ number_format($product->regular_price) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <script src="{{ asset('main/assets/js/Youtube.min.js') }}"></script>
    <script>
        var videos = document.getElementsByClassName('video-js-pc');
        // Loop through the videos
        for(var  i=0;i<videos.length;i++) {
            var player = videojs(videos[i].id, {
                autoplay: false
            });
        }

        var mobileVideos = document.getElementsByClassName('video-js-mobile');
        // Loop through the videos
        for(var  i=0;i<mobileVideos.length;i++) {
            var playerMobile = videojs(mobileVideos[i].id, {
                autoplay: false
            });
        }

    </script>
@endif
