@extends('frontend.master')

@section('title', 'Phong cách - Xu hướng')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Phong cách/Xu hướng'])
@endsection

@section('content')
    <section id="trending">
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
                                <div class="card-body accordion-body"></div>
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
                                <div class="card-body accordion-body"></div>
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
                                <div class="card-body accordion-body"></div>
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
                                <div class="card-body accordion-body"></div>
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
                            <div class="filter-content collapse show accordion-collapse"
                                 id="panelsStayOpen-collapseFive"
                                 aria-labelledby="panelsStayOpen-headingFive">
                                <ul class="filter-collection">
                                    <li class="filter-item active"><span class="icon-filter"></span><a href="#">Hàng
                                            Kênh Collection</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#">Không gian
                                            nội thất</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#">Thế giới
                                            thảm</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#">Nhà đẹp</a>
                                    </li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#">Dự án/Công
                                            trình đẹp</a></li>
                                    <li class="filter-item"><span class="icon-filter"></span><a href="#">Những cảm
                                            hứng cho bộ sưu tập</a></li>
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
                                <div class="card-body accordion-body"></div>
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
                                <div class="card-body accordion-body"></div>
                            </div>
                        </article>
                    </div>
                </aside>
                <main class="col-md-9">
                    <header>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">E-Magazine</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-font-header">E-Magazine</h2>
                            </div>
                        </div>
                    </header>
                    <div class="row mt-48px">
                        <div class="col-6">
                            <div class="post-image">
                                <div class="post-date-tag">
                                    Jan 29, 2021
                                </div>
                                <img class="w-100" src="{{ asset('main/assets/images/magazine-4.png') }}" alt="">
                            </div>
                            <div class="post-intro">
                                <div class="post-category">
                                    <span></span>
                                    <span>Dự án tiêu biểu</span>
                                </div>
                                <div class="post-big-title">Văn phòng</div>
                                <div class="post-author">
                                    By HK Rugs
                                </div>
                                <div class="post-big-desc">
                                    Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy
                                    chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine,
                                    một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho…
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <div class="col">
                                    <div class="post-image">
                                        <div class="post-date-tag">
                                            Jan 29, 2021
                                        </div>
                                        <img class="w-100 h-100"
                                             src="{{ asset('main/assets/images/magazine-3.png') }}" alt="">
                                    </div>
                                    <div class="post-intro">
                                        <div class="post-category">
                                            <span></span>
                                            <span>Dự án tiêu biểu</span>
                                        </div>
                                        <div class="post-title">Văn phòng</div>
                                        <div class="post-author">
                                            By HK Rugs
                                        </div>
                                        <div class="post-desc">
                                            Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy
                                            chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine,
                                            một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho…
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-24px">
                                    <div class="post-image">
                                        <div class="post-date-tag">
                                            Jan 29, 2021
                                        </div>
                                        <img class="w-100 h-100"
                                             src="{{ asset('main/assets/images/magazine-3.png') }}" alt="">
                                    </div>
                                    <div class="post-intro">
                                        <div class="post-category">
                                            <span></span>
                                            <span>Dự án tiêu biểu</span>
                                        </div>
                                        <div class="post-title">Văn phòng</div>
                                        <div class="post-author">
                                            By HK Rugs
                                        </div>
                                        <div class="post-desc">
                                            Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy
                                            chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine,
                                            một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho…
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @for($i = 0; $i < 6; $i++)
                            <div class="col-6 mt-48px">
                                <figure class="card post-card">
                                    <div class="post-card-image">
                                        <div class="post-card-tag">
                                            Jan 29, 2024
                                        </div>
                                        <a href="">
                                            <img src="{{ asset('main/assets/images/trending.png') }}"
                                                 class="w-100 h-100 object-fit-cover" alt="">
                                        </a>
                                    </div>
                                    <figcaption class="post-card-info">
                                        <div href="" class="post-card-category">
                                            <span></span>
                                            <span>Không gian nội thất</span>
                                        </div>
                                        <a href="">
                                            <h3 class="post-card-title">
                                                Lựa thảm cho không gian hành lang
                                            </h3>
                                        </a>
                                        <span class="post-card-author">
                                            By Ariana Yaptanggo
                                        </span>
                                        <div class="post-desc">
                                            Tất cả màu sắc và nguyên liệu sợi dệt đều được chúng tôi kiểm tra cẩn thận, đạt chất lượng cao nhất về độ bền và hiệu ứng màu tốt nhất
                                        </div>
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
