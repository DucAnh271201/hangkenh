@extends('frontend.master')

@section('title', 'Sản phẩm')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Sản phẩm'])
@endsection

@section('content')
    <section class="product-detail">
        <main class="container">
            <header class="pc">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="#"> New Collection</a></li>
                    </ol>
                </nav>
            </header>
            <section class="product-detail-pc body pc">
                <div class="block-left">
                    <div class="image-slider">
                        <img src="{{asset('main/assets/images/product-1.jpg')}}" class="mb-3" alt="Sản phẩm 1">
                        <img src="{{asset('main/assets/images/product-2.jpg')}}" class="mb-3" alt="Sản phẩm 2">
                        <img src="{{asset('main/assets/images/product-3.jpg')}}" class="mb-3" alt="Sản phẩm 3">
                        <img src="{{asset('main/assets/images/product-1.jpg')}}" class="mb-3" alt="Sản phẩm 4">
                        <img src="{{asset('main/assets/images/product-2.jpg')}}" class="mb-3" alt="Sản phẩm 5">
                        <img src="{{asset('main/assets/images/product-3.jpg')}}" alt="Sản phẩm 6">
                    </div>
                </div>
                <div class="block-right">
                    <div class="product-details">
                        <h2 class="product-name-detail">Gold Handloom Cashmere Blend Low Pile</h2>
                        <p class="product-brand">THE RUG COMPANY</p>
                        <div class="product-price-rating">
                            <span class="product-price">$1,998.00</span>
                            <div class="product-rating">
                                <img
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae8a9102393f7664e188490355b26e9810292c69bcd30f6abfa3cb486a5d9e71?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                                    alt="Product rating stars" class="rating-stars"/>
                                <span class="rating-value">4.8 of 5</span>
                            </div>
                        </div>
                        <div class="product-size-guide">
                            <span class="product-size-label">1. Chọn kích thước thảm</span>
                            <a href="#" class="size-guide-link">Size and fitting guide</a>
                        </div>
                        <div class="w-100 select-option">
                            <select class="product-size-selector w-100">
                                <option value="">Kích thước 2,5m x 2,5m</option>
                            </select>
                        </div>
                        <div class="product-color-guide">
                            <span class="product-color-label">2. Chọn màu sắc</span>
                            <span class="selected-color">Color is choose</span>
                        </div>
                        <div class="row product-color-select">
                            <div class="bg-element-filter bg-element-filter-image selected">
                                <img src="{{ asset('main/assets/images/color/color-duck-green.png') }}">
                            </div>
                            @for($i = 0; $i < 10; $i++)
                                <div class="bg-element-filter bg-element-filter-image">
                                    <img src="{{ asset('main/assets/images/color/color-duck-green.png') }}">
                                </div>
                            @endfor
                        </div>
                        <p class="payment-info">
                            Pay 50% now & 50% upon shipment on all Made To Order sizes
                        </p>
                        <div class="return-info">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/800f590aae734ab19cea8e5d31b49b1c67fe3b95e11a738c1a2c974ce7dc4d13?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                                 alt="Return icon" class="return-icon"/>
                            <p class="return-details">
                                $149 Unlimited Furniture Delivery. Allow 2-4 weeks for delivery once the item has
                                shipped. This item can
                                be returned within 30 days of delivery.
                                <img src="{{asset('main/assets/images/question.svg')}}" alt="question">
                        </div>
                        <div class="return-info">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/800f590aae734ab19cea8e5d31b49b1c67fe3b95e11a738c1a2c974ce7dc4d13?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                                 alt="Delivery icon" class="delivery-icon"/>
                            <p class="return-details">
                                This item is subject to a 25% restocking fee if returned.
                                <img src="{{asset('main/assets/images/question.svg')}}" alt="question">
                            </p>
                            </p>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-dark btn-add-to-cart">
                                <span class="add-to-cart-text">Shop now</span>
                                <img src="{{asset('main/assets/images/shop-now.svg')}}" alt="question">
                            </button>
                            <span class="product-detail-btn-like">
                                            <img src="{{ asset('main/assets/images/like.svg') }}"
                                                 class="like">
                                        </span>
                            <span class="product-detail-btn-zoom">
                                            <img src="{{ asset('main/assets/images/zoom.svg') }}"
                                                 class="zoom">
                                        </span>
                        </div>
                        <p class="product-categories">
                            Categories: Kitchen & Dining RoomChairs, Benches & Stools
                        </p>
                        <div class="product-share">
                            <span class="share-label">Share this product</span>
                            <img src="{{ asset('main/assets/images/fb.svg') }}" alt="fb">
                            <img src="{{ asset('main/assets/images/twitter.svg') }}" alt="twitter">
                            <img src="{{ asset('main/assets/images/social.svg') }}" alt="social">
                            <img src="{{ asset('main/assets/images/youtube.svg') }}" alt="youtube">
                            <img src="{{ asset('main/assets/images/ista.svg') }}" alt="insta">
                        </div>
                        <div class="product-dimensions">
                            <div class="product-tech-sheet">
                                <p>Tech Sheet</p>
                                <img src="{{ asset('main/assets/images/push.svg') }}" alt="tech sheet">
                            </div>
                            <div class="product-composition">
                                <p>Composition</p>
                                <img src="{{ asset('main/assets/images/minus.svg') }}" alt="Composition">
                            </div>
                            <div class="product-composition">
                                <p>Composition</p>
                                <div>
                                    <p>PL 91%</p>
                                    <p>EA 9%</p>
                                </div>
                            </div>
                            <div class="product-weight">
                                <p>Weight — GR/M2</p>
                                <p>260</p>
                            </div>
                            <div class="product-height">
                                <p>Height — CM</p>
                                <p>150</p>
                            </div>
                            <div class="product-length">
                                <p>Length — M</p>
                                <p>50</p>
                            </div>
                            <div class="product-fabric-feature">
                                <p>Fabric Features</p>
                                <img src="{{ asset('main/assets/images/push.svg') }}" alt="Fabric Features">
                            </div>
                            <div class="product-treatments">
                                <p>Treatments on Request</p>
                                <img src="{{ asset('main/assets/images/push.svg') }}" alt="Treatments on Request">
                            </div>
                        </div>
                        <div class="product-details-list">
                            <div>
                                <p>Cushion Content</p>
                                <p>
                                    High-resiliency foam core cushions are wrapped in soft fiber padding and a
                                    hypo-allergenic blend of down and
                                    feathers, for a plush seat with a casual silhouette
                                </p>
                            </div>

                            <div>
                                <p>Seat and Back</p>
                                <p>Sinuous spring construction</p>
                            </div>
                            <div>
                                <p>Frame</p>
                                <p>Kiln-dried hardwood frame</p>
                            </div>
                            <div>
                                <p>Color and Finish</p>
                                <p>Due to the handcrafted nature of our custom furniture, expect slight variation in the
                                    appearance of each
                                    unique piece</p>
                            </div>

                            <div>
                                <p>Care Instructions</p>
                                <p>Please reference our upholstery care guide</p>
                            </div>

                            <p>Origin<br/>
                                Imported</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-detail-mobile phone">
                <div class="container">
                    <div class="header-product-detail">
                        <h1 class="product-title">Gold Handloom Cashmere Blend Low Pile</h1>
                        <p class="product-desc">THE RUG COMPANY</p>
                        <div class="d-flex">
                            <div class="product-price"> $1,998.00</div>
                            <div class="product-rating">
                                <img
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae8a9102393f7664e188490355b26e9810292c69bcd30f6abfa3cb486a5d9e71?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                                    alt="Product rating stars" class="rating-stars"/>
                                <span class="rating-value">4.8 of 5</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-product">
                        @for ($i = 0; $i <= 3; $i ++)
                            <div class="slider-product-items">
                                <img src="{{ asset('main/assets/images/product-1.jpg') }}" alt="banner 1">
                            </div>
                        @endfor
                    </div>
                    <div class="product-block-info">
                        <div class="product-details">
                            <div class="product-size-guide">
                                <span class="product-size-label">1. Chọn kích thước thảm</span>
                                <a href="#" class="size-guide-link">Size and fitting guide</a>
                            </div>
                            <div class="w-100 select-option">
                                <select class="product-size-selector w-100">
                                    <option value="">Kích thước 2,5m x 2,5m</option>
                                </select>
                            </div>
                            <div class="product-color-guide">
                                <span class="product-color-label">2. Chọn màu sắc</span>
                                <span class="selected-color">Color is choose</span>
                            </div>
                            <div class="row product-color-select">
                                <div class="bg-element-filter bg-element-filter-image selected">
                                    <img src="{{ asset('main/assets/images/color/color-duck-green.png') }}">
                                </div>
                                @for($i = 0; $i < 10; $i++)
                                    <div class="bg-element-filter bg-element-filter-image">
                                        <img src="{{ asset('main/assets/images/color/color-duck-green.png') }}">
                                    </div>
                                @endfor
                            </div>
                            <p class="payment-info">
                                Pay 50% now & 50% upon shipment on all Made To Order sizes
                            </p>
                            <div class="return-info">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/800f590aae734ab19cea8e5d31b49b1c67fe3b95e11a738c1a2c974ce7dc4d13?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                                     alt="Return icon" class="return-icon"/>
                                <p class="return-details">
                                    $149 Unlimited Furniture Delivery. Allow 2-4 weeks for delivery once the item has
                                    shipped. This item can
                                    be returned within 30 days of delivery.
                                    <img src="{{asset('main/assets/images/question.svg')}}" alt="question">
                            </div>
                            <div class="return-info">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/800f590aae734ab19cea8e5d31b49b1c67fe3b95e11a738c1a2c974ce7dc4d13?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                                     alt="Delivery icon" class="delivery-icon"/>
                                <p class="return-details">
                                    This item is subject to a 25% restocking fee if returned.
                                    <img src="{{asset('main/assets/images/question.svg')}}" alt="question">
                                </p>
                                </p>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-dark btn-add-to-cart">
                                    <span class="add-to-cart-text">Shop now</span>
                                    <img src="{{asset('main/assets/images/shop-now.svg')}}" alt="question">
                                </button>
                                <span class="product-detail-btn-like">
                                            <img src="{{ asset('main/assets/images/like.svg') }}"
                                                 class="like">
                                        </span>
                                <span class="product-detail-btn-zoom">
                                            <img src="{{ asset('main/assets/images/zoom.svg') }}"
                                                 class="zoom">
                                        </span>
                            </div>
                            <p class="product-categories">
                                Categories: Kitchen & Dining RoomChairs, Benches & Stools
                            </p>
                            <div class="product-share">
                                <span class="share-label">Share this product</span>
                                <img src="{{ asset('main/assets/images/fb.svg') }}" alt="fb">
                                <img src="{{ asset('main/assets/images/twitter.svg') }}" alt="twitter">
                                <img src="{{ asset('main/assets/images/social.svg') }}" alt="social">
                                <img src="{{ asset('main/assets/images/youtube.svg') }}" alt="youtube">
                                <img src="{{ asset('main/assets/images/ista.svg') }}" alt="insta">
                            </div>
                            <div class="product-dimensions">
                                <div class="product-tech-sheet">
                                    <p>Tech Sheet</p>
                                    <img src="{{ asset('main/assets/images/push.svg') }}" alt="tech sheet">
                                </div>
                                <div class="product-composition">
                                    <p>Composition</p>
                                    <img src="{{ asset('main/assets/images/minus.svg') }}" alt="Composition">
                                </div>
                                <div class="product-composition">
                                    <p>Composition</p>
                                    <div>
                                        <p>PL 91%</p>
                                        <p>EA 9%</p>
                                    </div>
                                </div>
                                <div class="product-weight">
                                    <p>Weight — GR/M2</p>
                                    <p>260</p>
                                </div>
                                <div class="product-height">
                                    <p>Height — CM</p>
                                    <p>150</p>
                                </div>
                                <div class="product-length">
                                    <p>Length — M</p>
                                    <p>50</p>
                                </div>
                                <div class="product-fabric-feature">
                                    <p>Fabric Features</p>
                                    <img src="{{ asset('main/assets/images/push.svg') }}" alt="Fabric Features">
                                </div>
                                <div class="product-treatments">
                                    <p>Treatments on Request</p>
                                    <img src="{{ asset('main/assets/images/push.svg') }}" alt="Treatments on Request">
                                </div>
                            </div>
                            <div class="product-details-list">
                                <div>
                                    <p>Cushion Content</p>
                                    <p>
                                        High-resiliency foam core cushions are wrapped in soft fiber padding and a
                                        hypo-allergenic blend of down and
                                        feathers, for a plush seat with a casual silhouette
                                    </p>
                                </div>

                                <div>
                                    <p>Seat and Back</p>
                                    <p>Sinuous spring construction</p>
                                </div>
                                <div>
                                    <p>Frame</p>
                                    <p>Kiln-dried hardwood frame</p>
                                </div>
                                <div>
                                    <p>Color and Finish</p>
                                    <p>Due to the handcrafted nature of our custom furniture, expect slight variation in the
                                        appearance of each
                                        unique piece</p>
                                </div>

                                <div>
                                    <p>Care Instructions</p>
                                    <p>Please reference our upholstery care guide</p>
                                </div>

                                <p>Origin<br/>
                                    Imported</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </section>
    <section class="product-detail">
        <div class="container">
            <div class="trending-box">
                <div class="tblock-left position-relative">
                    <article class="tblock-information d-flex flex-column justify-content-end">
                        <p class="tblock-description">
                                Có nhiều cách để làm một tấm thảm bằng tay và nhiều chất liệu để bạn lựa chọn. Các
                                loại sợi
                                khác nhau thể hiện các đặc tính khác nhau về độ bền, độ mềm và độ bóng. Một số loại
                                mịn và
                                mát khi chạm vào trong khi một số khác lại mềm mại và ấm áp một cách xa hoa.
                                Ngoài sự quyến rũ rõ ràng hơn của len, lụa và bông, chúng tôi đã khám phá những ưu
                                điểm của
                                các loại sợi đa dạng như tre, lá chuối,
                                mohair, merino và alpaca.
                            </p>
                    </article>
                    <div>
                        <p class="date">
                            Tháng 10 năm 1997
                        </p>
                        <p class="author">
                            VŨ SƠN DIRECTOR
                        </p>
                    </div>
                </div>
                <div class="tblock-right">
                    <img src="{{ asset('main/assets/images/product-author.png') }}"/>
                    <div class="img-desc">
                        <h2>Thảm len hàng kênh</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relate-product">
        <div class="container">
            <div class="section-box">
                <div class="sub-title">
                    Discover Our
                </div>
                <h3 class="title">Bestselling Rugs</h3>
                <div class="text-underline"></div>
            </div>
            <div class="row pc">
                @for($i = 0; $i < 4; $i++)
                    <div class="col-3 product">
                        <figure class="card product-card">
                            <div class="product-image">
                                <div class="img-wrap">
                                    <img src="{{ asset('main/assets/images/product-1.jpg') }}"
                                         class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="img-wrap-hide">
                                    <img src="{{ asset('main/assets/images/product-3.jpg') }}"
                                         class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_1486_972)">
                                                <path d="M14.8436 2.8202C14.0545 1.92477 12.9597 1.43164 11.761 1.43164C10.0751 1.43164 9.00777 2.43852 8.40927 3.2832C8.25399 3.50239 8.12189 3.72217 8.01099 3.92898C7.90008 3.72217 7.76802 3.50239 7.61271 3.2832C7.0142 2.43852 5.94686 1.43164 4.26099 1.43164C3.0623 1.43164 1.96752 1.9248 1.17833 2.82023C0.42558 3.67442 0.0109863 4.81842 0.0109863 6.04148C0.0109863 7.37283 0.530768 8.61111 1.64677 9.93836C2.64417 11.1246 4.07908 12.3474 5.74067 13.7633C6.35983 14.2909 7.00011 14.8365 7.68177 15.4329L7.70224 15.4509C7.79061 15.5282 7.9008 15.5669 8.01099 15.5669C8.12117 15.5669 8.23136 15.5282 8.31974 15.4509L8.34021 15.4329C9.02186 14.8365 9.66214 14.2909 10.2814 13.7632C11.9429 12.3474 13.3778 11.1246 14.3752 9.93836C15.4912 8.61108 16.011 7.37283 16.011 6.04148C16.011 4.81842 15.5964 3.67442 14.8436 2.8202ZM9.67327 13.0497C9.13952 13.5045 8.59021 13.9726 8.01099 14.4761C7.4318 13.9727 6.88245 13.5045 6.34861 13.0496C3.09677 10.2786 0.948486 8.44795 0.948486 6.04148C0.948486 5.0468 1.27989 4.12292 1.88167 3.44008C2.49036 2.74948 3.33533 2.36914 4.26099 2.36914C5.54627 2.36914 6.37711 3.16095 6.84774 3.8252C7.26989 4.42095 7.49017 5.02152 7.5653 5.25205C7.62814 5.44502 7.80805 5.57561 8.01099 5.57561C8.21392 5.57561 8.39383 5.44502 8.45667 5.25205C8.5318 5.02152 8.75208 4.42095 9.17424 3.82517C9.64486 3.16095 10.4757 2.36914 11.761 2.36914C12.6866 2.36914 13.5316 2.74948 14.1403 3.44008C14.7421 4.12292 15.0735 5.0468 15.0735 6.04148C15.0735 8.44795 12.9252 10.2786 9.67327 13.0497Z" fill="#242424"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1486_972">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                            <g clip-path="url(#clip0_1486_978)">
                                                <path d="M15.8178 15.4381L11.913 11.5334C12.8836 10.3662 13.4683 8.86744 13.4683 7.23438C13.4683 3.52103 10.4474 0.5 6.73421 0.5C3.02094 0.5 0 3.52103 0 7.23438C0 10.9475 3.02094 13.9683 6.73421 13.9683C8.36718 13.9683 9.86604 13.3836 11.0332 12.413L14.9381 16.3178C15.0595 16.4393 15.2188 16.5 15.3779 16.5C15.5371 16.5 15.6963 16.4393 15.8178 16.3178C16.0608 16.0748 16.0608 15.681 15.8178 15.4381ZM1.24414 7.23438C1.24414 4.20705 3.70696 1.74414 6.73421 1.74414C9.76137 1.74414 12.2241 4.20705 12.2241 7.23438C12.2241 10.2615 9.76137 12.7241 6.73421 12.7241C3.70696 12.7241 1.24414 10.2615 1.24414 7.23438Z" fill="#242424"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1486_978">
                                                    <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <figcaption class="product-info">
                                <a href="" class="product-name">Alpaca</a>
                                <div class="product-description">
                                    <span class="description">Sarabande</span>
                                </div>
                                <div class="product-price">
                                    <span class="price">$1.280</span>
                                </div>
                                <a class="btn-white btn-contract">
                                    <span>Liên hệ</span>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                @endfor
            </div>
            <div class="phone product-list-phone slider">
                @if($products->isNotEmpty())
                    @foreach($products as $product)
                        <article>
                            @include('frontend.shortcodes.product_item', [
                            'product' => $product
                        ])
                        </article>
                    @endforeach
                 @endif
            </div>
     </div>
    </section>
<nav class="product-detail pc">
    <ul class="pagination bsb-pagination-1 pagination-lg justify-content-center">
     <li class="page-item"><a class="page-link" href="#!">1</a></li>
     <li class="page-item active"><a class="page-link" href="#!">2</a></li>
     <li class="page-item"><a class="page-link" href="#!">3</a></li>
     <li class="page-item"><a class="page-link" href="#!">Trang kế tiếp</a></li>
    </ul>
</nav>
@endsection
