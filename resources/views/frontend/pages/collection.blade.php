@extends('frontend.master')

@section('title', 'Bộ sưu tập')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Bộ sưu tập'])
@endsection

@section('content')
    <section id="collection">
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
                        <div class="filter-group">
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
                        </div>
                        <div class="filter-group">
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
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                    Catalogue
                                </button>
                            </header>
                            <div class="filter-content collapse accordion-collapse" id="panelsStayOpen-collapseThree">
                            </div>
                        </div>
                        <div class="filter-group">
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
                        </div>
                        <div class="filter-group">
                            <header class="accordion-header" id="panelsStayOpen-headingFive">
                                <button class="accordion-button filter-product-title" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">
                                    Tạp chí điện tử
                                </button>
                            </header>
                            <div class="filter-content collapse show accordion-collapse" id="panelsStayOpen-collapseFive"
                                 aria-labelledby="panelsStayOpen-headingFive">
                                <ul class="filter-collection">
                                    <li class="filter-item active"><span class="icon-filter"></span>Giới thiệu về bộ sưu tập</li>
                                    <li class="filter-item"><span class="icon-filter"></span>Mọi điều về thảm</li>
                                    <li class="filter-item"><span class="icon-filter"></span>Thế giới làm gì với thảm của họ</li>
                                    <li class="filter-item"><span class="icon-filter"></span>Triển lãm nội thất trên thế giới</li>
                                    <li class="filter-item"><span class="icon-filter"></span>Dự án/Công trình đẹp</li>
                                    <li class="filter-item"><span class="icon-filter"></span>Những cảm hứng cho bộ sưu tập</li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-group">
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
                        </div>
                        <div class="filter-group">
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
                        </div>
                    </div>
                </aside>
                <main class="col-md-9">
                    @include('frontend.components.breadcrumb_cate', ['title' => 'Bộ sưu tập'])
                    <div class="row product mt-48px">
                        @for($i = 0; $i < 6; $i++)
                            <div class="col-6 product">
                                <figure class="card product-card gap-0">
                                    <div class="product-image">
                                        <div class="img-wrap">
                                            <img src="{{ asset('main/assets/images/product-1.jpg') }}"
                                                 class="w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="img-wrap-hide">
                                            <img src="{{ asset('main/assets/images/product-3.jpg') }}"
                                                 class="w-100 h-100 object-fit-cover">
                                        </div>
                                    </div>
                                    <figcaption class="project-article-content">
                                        <div class="project-article-title sub-title">
                                            <p>Agatha</p>
                                        </div>
                                        <div class="project-article-author">
                                            <p>Project by NTK Sơn Vũ</p>
                                            <p>Photo: DaniNguyen</p>
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
    <section>
@endsection
