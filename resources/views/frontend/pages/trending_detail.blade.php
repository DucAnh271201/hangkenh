@extends('frontend.master')

@section('title', 'Phong cách - Xu hướng')
@section('content')
    <div id="trending_detail">
        <div class="banner">
            <div class="row m-0 w-100">
                <div class="col-12 p-0 banner-center banner-category">
                    <img src="{{ asset('main/assets/images/banner-trending-detail.jpg') }}"
                         class="w-100 banner-image-3" alt="banner-image-3">
                    <div class="text-banner-category">
                        <h2>
                            Phong cách<br />
                            xu hướng
                        </h2>
                    </div>
                </div>
            </div>
        </div>
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
                                <div class="card-body accordion-body">
                                </div>
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
                                <div class="card-body accordion-body">
                                </div>
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
                                <div class="card-body accordion-body">
                                </div>
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
                                <div class="card-body accordion-body">
                                </div>
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
                                <div class="card-body accordion-body">
                                    <ul class="filter-collection">
                                        <li class="filter-item active"><span class="icon-filter"></span><a href="#"> Hàng Kênh Collection</a></li>
                                        <li class="filter-item"><span class="icon-filter"></span><a href="#"> Không gian nội thất</a></li>
                                        <li class="filter-item"><span class="icon-filter"></span><a href="#"> Thế giới thảm</a></li>
                                        <li class="filter-item"><span class="icon-filter"></span><a href="#"> Nhà đẹp</a></li>
                                        <li class="filter-item"><span class="icon-filter"></span><a href="#"> Dự án/Công trình đẹp</a></li>
                                        <li class="filter-item"><span class="icon-filter"></span><a href="#">Những cảm hứng cho bộ sưu tập</a></li>
                                    </ul>
                                </div>
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
                                <div class="card-body accordion-body">
                                </div>
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
                                <div class="card-body accordion-body">
                                </div>
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
                    <article>
                        <header>
                            <div class="trending-detail-main-image">
                                <img src="{{ asset('main/assets/images/trending/detail-main.png') }}" alt="Thảm không gian ngoài trời">
                                <span class="date">Jan 29, 2024</span>
                            </div>
                            <div class="trending-detail-category"><span class="underline"></span><p>INSPIRED BY NATURE</p></div>
                            <h3 class="trending-detail-title">Thảm không gian ngoài trời</h3>
                            <span class="trending-detail-author">By Ariana Yaptanggo  </span>
                            <p class="trending-detail-short-content">
                                Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine, một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho…
                            </p>
                        </header>
                        <figure>
                            <div class="trending-detail-content">
                                <div>
                                    <img src="{{ asset('main/assets/images/trending/detail-1.png') }}" alt="Thảm không gian ngoài trời">
                                </div>
                                <div>
                                    <img src="{{ asset('main/assets/images/trending/detail-2.png') }}" alt="Thảm không gian ngoài trời">
                                </div>
                            </div>
                            <div class="trending-detail-content">
                                <div>
                                    <img src="{{ asset('main/assets/images/trending/detail-2.png') }}" alt="Thảm không gian ngoài trời">
                                </div>
                                <div>
                                    <img src="{{ asset('main/assets/images/trending/detail-1.png') }}" alt="Thảm không gian ngoài trời">
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
                            <div class="col-4 article">
                                <figure class="card card-article-grid">
                                    <div class="article-img">
                                        <div class="img-wrap">
                                            <img src="{{ asset('main/assets/images/trending.png') }}"
                                                 class="img-fluid">
                                            <p class="article-created-at">Jan 29, 2024</p>
                                        </div>
                                    </div>
                                    <figcaption class="article-content">
                                        <div class="article-category">
                                            <span class="underline"></span>
                                            <p>INSPIRED BY NATURE</p>
                                        </div>
                                        <div class="article-title">
                                            Văn phòng
                                        </div>
                                        <p class="article-author">By Ariana Yaptanggo  </p>
                                        <div class="article-short-content">
                                            <p>Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine, một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho mọi nhà
                                            </p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
