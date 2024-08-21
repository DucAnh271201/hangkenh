@extends('frontend.master')

@section('title', 'Phong cách - Xu hướng')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Phong cách/Xu hướng'])
@endsection

@section('content')
    <section id="trending_detail">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="card border-0 accordion" id="accordion_filter">
                        <div class="input-search">
                            <input class="form-control search" type="text" placeholder="Tìm kiếm...">
                            <button type="submit" class="btn-search">
                                <img src="{{ asset('main/assets/images/search.svg') }}">
                            </button>
                        </div>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    GIỚI THIỆU
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseOne"
                                 aria-labelledby="panelsStayOpen-headingOne">
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                    Nhà thiết kế
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseTwo"
                                 aria-labelledby="panelsStayOpen-headingTwo">
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                    Catalogue
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseThree">
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                                    Ấn phẩm/tạp chí
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseFour"
                                 aria-labelledby="panelsStayOpen-headingFour">
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">
                                    E-Magazine
                                </button>
                            </header>
                            <div class="filter-content collapse show accordion-collapse" id="panelsStayOpen-collapseFive"
                                 aria-labelledby="panelsStayOpen-headingFive">
                                <ul class="filter-collection">
                                    <li class="filter-item active"><span class="icon-filter"></span><a href="#"> Hàng Kênh Collection</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#"> Không gian nội thất</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#"> Thế giới thảm</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#"> Nhà đẹp</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#"> Dự án/Công trình đẹp</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#">Những cảm hứng cho bộ sưu tập</a></li>
                                </ul>
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingSix">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">
                                    Nhà thiết kế
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseSix"
                                 aria-labelledby="panelsStayOpen-headingSix">
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingSix">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">
                                    Render thảm
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseSix"
                                 aria-labelledby="panelsStayOpen-headingSix">
                            </div>
                        </article>
                    </div>
                </aside>
                <main class="col-md-9">
                    <header>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="/"> E-magazine</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thảm không gian ngoài trời</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-font-header">Thảm không gian ngoài trời</h2>
                            </div>
                        </div>
                    </header>
                    <article class="mt-48px">
                        <header>
                            <div class="post-image">
                                <div class="post-date-tag">
                                    Jan 29, 2021
                                </div>
                                <img class="w-100" src="{{ asset('main/assets/images/trending/detail-main.png') }}" alt="">
                            </div>
                            <div class="post-intro">
                                <div class="post-category">
                                    <span></span>
                                    <span>Dự án tiêu biểu</span>
                                </div>
                                <div class="post-big-title">Thảm không gian ngoài trời</div>
                                <div class="post-author">
                                    By Ariana Yaptanggo
                                </div>
                                <div class="post-big-desc">
                                    Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy
                                    chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine,
                                    một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho…
                                </div>
                            </div>
                        </header>
                        <figure class="mt-48px">
                            <div class="row magazine-post">
                                <div class="col-6">
                                    <img class="w-100 h-100" src="{{ asset('main/assets/images/xu-huong-2.jpg') }}">
                                </div>
                                <div class="col-6">
                                    <img class="w-100 h-100" src="{{ asset('main/assets/images/xu-huong.jpg') }}">
                                </div>
                            </div>
                            <div class="row magazine-post mt-48px">
                                <div class="col-6">
                                    <img class="w-100 h-100" src="{{ asset('main/assets/images/xu-huong.jpg') }}">
                                </div>
                                <div class="col-6">
                                    <img class="w-100 h-100" src="{{ asset('main/assets/images/xu-huong-2.jpg') }}">
                                </div>
                            </div>
                        </figure>
                    </article>
                </main>
                <div class="discover">
                    <div class="section-box">
                        <div class="sub-title">
                            Loại thảm
                        </div>
                        <h3 class="title">không gian & Dòng thảm</h3>
                        <div class="text-underline"></div>
                    </div>
                    <div class="row">
                        @for($i = 0; $i < 3; $i++)
                            <div class="col-4">
                                <figure class="card product-card">
                                    <div class="product-image">
                                        <div class="img-wrap">
                                            <img src="{{ asset('main/assets/images/product-1.jpg') }}"
                                                 class="w-100 h-100 object-fit-cover"
                                                 alt="">
                                        </div>
                                        <div class="img-wrap-hide">
                                            <img src="{{ asset('main/assets/images/product-3.jpg') }}"
                                                 class="w-100 h-100 object-fit-cover"
                                                 alt="">
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
                                        <div class="price-wrap">
                                            <span class="price">$1.280</span>
                                        </div>
                                        <a onclick="showSidebar('sidebar-filter-category')"
                                           class="btn-white btn-contract btn-contract-mobile">
                                            <div>Liên hệ</div>
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
