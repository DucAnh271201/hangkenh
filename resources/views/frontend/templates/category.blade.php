@extends('frontend.master')

@section('title', 'Danh mục')
@section('content')
    <div class="banner">
        <div class="row m-0 w-100">
            <div class="col-12 p-0 banner-center banner-category">
                <img src="{{ asset('main/assets/images/banner-category.jpg') }}"
                     class="w-100 banner-image-3" alt="banner-image-3">
                <div class="text-banner-category">
                    <h2>
                        {{ $category->title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
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
                    </article>
                    <article class="filter-group">
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
                    </article>
                    <article class="filter-group">
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
                    </article>
                    <article class="filter-group">
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
                    </article>
                    <article class="filter-group">
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
                    </article>
                    <article class="filter-group">
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
                    </article>
                </div>
            </aside>
            <main class="col-md-9">
                <header>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                            @foreach($breadcrumbs as $breadcrumb)
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ get_permalink($breadcrumb) }}"> {{ $breadcrumb->title }}</a></li>
                            @endforeach
                            <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-8">
                            <h2 class="category-font-header">{{ $category->title }}</h2>
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
                <div class="row">
                    @if($products->isNotEmpty())
                        @foreach($products as $product)
                            <div class="col-6 col-md-4">
                                @include('frontend.shortcodes.product_item',['product' => $product])
                            </div>
                        @endforeach
                    @else
                        <p>Sản phẩm đang được cập nhật</p>
                    @endif
                </div>
                {{ $products->links('pagination::category-pagination') }}
            </main>
        </div>
    </div>
@endsection
