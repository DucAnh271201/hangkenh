@extends('frontend.master')

@section('title', 'Danh mục')

@section('banner')
    <section class="section-banner">
        <img src="{{ asset('main/assets/images/banner-category.jpg') }}"
             class="w-100 h-100" alt="banner-image-3">
        <div class="title-banner">
            <h1>
                Contemporary Rugs
            </h1>
        </div>
    </section>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <aside class="col-xl-3 col-sm-12 sidebar-filter" id="sidebar-filter-category">
                    <div class="card border-0 accordion" id="accordion_filter">
                        <div class="input-search">
                            <input class="form-control search" type="text" placeholder="Tìm kiếm...">
                            <button type="submit" class="btn-search">
                                <img src="{{ asset('main/assets/images/search.svg') }}">
                            </button>
                        </div>
                        <div class="sidebar-filter-header">
                            <div class="sidebar-filter-title">Bộ lọc sản phẩm</div>
                            <div>
                                <a onclick="showSidebar('sidebar-filter-category')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                        <path d="M13.7549 22.7459L22.2449 14.2559" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22.2449 22.7459L13.7549 14.2559" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    KHỔ THẢM
                                </button>
                            </header>
                            <div class="filter-content collapse show accordion-collapse" id="panelsStayOpen-collapseOne"
                                 aria-labelledby="panelsStayOpen-headingOne">
                                <div class="card-body accordion-body">
                                    <div class="row">
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>10 x 10</span>
                                            </label>
                                        </div>
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>20 x 10</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                    MÀU SẮC
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse show" id="panelsStayOpen-collapseTwo"
                                 aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="card-body accordion-body">
                                    <div class="row">
                                        @for($i = 0; $i < 10; $i++)
                                            <div class="bg-element-filter">
                                                <div class="text-center color-pick-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                                         viewBox="0 0 21 20" fill="none">
                                                        <path
                                                            d="M10.5 17.5C14.6421 17.5 18 14.1421 18 10C18 5.85786 14.6421 2.5 10.5 2.5C6.35786 2.5 3 5.85786 3 10C3 14.1421 6.35786 17.5 10.5 17.5Z"
                                                            fill="#1F97A8"/>
                                                    </svg>
                                                </div>
                                                <div class="text-center title-filter-select">Xanh</div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                    CÔNG NGHỆ
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse show" id="panelsStayOpen-collapseThree">
                                <div class="card-body accordion-body">
                                    <div class="row">
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>Mỹ</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                                    CHẤT LIỆU
                                </button>
                            </header>
                            <div class="filter-content collapse show accordion-collapse" id="panelsStayOpen-collapseFour"
                                 aria-labelledby="panelsStayOpen-headingFour">
                                <div class="card-body accordion-body">
                                    <div class="row">
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>Bamboo silk</span>
                                            </label>
                                        </div>
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>Acrylic</span>
                                            </label>
                                        </div>
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>Nylon</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">
                                    PHONG CÁCH
                                </button>
                            </header>
                            <div class="filter-content collapse show accordion-collapse" id="panelsStayOpen-collapseFive"
                                 aria-labelledby="panelsStayOpen-headingFive">
                                <div class="card-body accordion-body">
                                    <div class="row">
                                        <div class="bg-element-filter">
                                            <label class="checkbox-btn">
                                                <input type="checkbox">
                                                <span>Cổ điển</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingSix">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">
                                    KHỔ THẢM
                                </button>
                            </header>
                            <div class="filter-content collapse show accordion-collapse" id="panelsStayOpen-collapseSix"
                                 aria-labelledby="panelsStayOpen-headingSix">
                                <div class="card-body accordion-body">
                                    <div class="row">
                                        <span class="bg-element-filter title-filter-select">Thảm khách sạn</span>
                                        <span class="bg-element-filter title-filter-select">Văn phòng</span>
                                        <span class="bg-element-filter title-filter-select">Nhà hàng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <main class="col-xl-9 col-md-9 col-sm-12">
                    <header class="content-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New Collection</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-8">
                                <h2 class="category-font-header">Contemporary Rugs</h2>
                            </div>
                            <div class="col-4 filter-basic">
                                <label>Hiển thị</label>
                                <img src="{{ asset('main/assets/images/candle.svg') }}"
                                     class="candle" alt="candle">
                                <img src="{{ asset('main/assets/images/category.svg') }}"
                                     class="category" alt="category">
                            </div>
                        </div>
                    </header>
                    <div class="row product mt-48px">
                        @for($i = 0; $i < 9; $i++)
                            <div class="col-6 col-xl-4 product">
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
                                        <div class="product-price">
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
                    <nav class="mt-48px">
                        <ul class="pagination bsb-pagination-1 pagination-lg justify-content-center">
                            <li class="page-item"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Trang kế tiếp</a></li>
                        </ul>
                    </nav>
                </main>
            </div>
        </div>
    </section>
@endsection
