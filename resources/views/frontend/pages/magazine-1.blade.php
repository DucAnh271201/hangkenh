@extends('frontend.master')

@section('title', 'Ấn phẩm/Tạp chí')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Ấn phẩm / Tạp chí'])
@endsection

@section('content')
    <section>
        <div class="container">
            <header>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item active" aria-current="page">New Collection</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div class="col-9">
                            <h5 class="category-font-header">Ấn phẩm/Tạp chí</h5>
                        </div>
                        <div class="col-3 justify-content-end position-relative">
                            <div class="d-flex justify-content-end">
                                <div class="dropdown-icon">
                                    <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#menuMagazine">
                                        <img src="{{ asset('main/assets/images/more.svg') }}" alt="more"
                                             class="w-100 h-100 object-fit-contain nav-link">
                                    </a>
                                </div>
                                <div class="menu-magazine-dropdown collapse position-absolute" id="menuMagazine"
                                     style="z-index: 999">
                                    <div class="d-flex">
                                        <div class="col">
                                            <ul>
                                                <li><a href="#">Giới thiệu về bộ sưu tập</a></li>
                                                <li><a href="#">Thế giới làm gì với thảm của họ</a></li>
                                                <li><a href="#">Triển lãm nội thất trên thế giới</a></li>
                                                <li><a href="#">Dự án/Công trình đẹp</a></li>
                                                <li><a href="#">Những cảm hứng cho bộ sưu tập</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section class="mt-80px">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="post-image" style="height: 1095px">
                        <div class="post-date-tag">
                            Jan 29, 2021
                        </div>
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('main/assets/images/magazine-4.png') }}" alt="">
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
                                <img class="w-100" src="{{ asset('main/assets/images/magazine-3.png') }}" alt="">
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
                                <img class="w-100" src="{{ asset('main/assets/images/magazine-3.png') }}" alt="">
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
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-80px row-gap-80px">
                @for ($j = 0; $j <= 8; $j++)
                    <div class="col-4">
                        <figure class="card post-card">
                            <div class="post-card-image">
                                <div class="post-card-tag">
                                    Jan 29, 2021
                                </div>
                                <a href="">
                                    <img src="{{ asset('main/assets/images/post-2.jpg') }}" class="w-100 h-100 object-fit-cover"
                                         alt="post-2">
                                </a>
                            </div>
                            <figcaption class="post-card-info">
                                <div href="" class="post-card-category">
                                    <span></span>
                                    <span>Dự án tiêu biểu</span>
                                </div>
                                <a href="">
                                    <h3 class="post-card-title">
                                        Văn phòng
                                    </h3>
                                </a>
                                <span class="post-card-author">
                                  By HK Rugs
                                </span>
                                <div class="post-desc">
                                    Từ thực vật trừu tượng đến động vật có họa tiết, hãy khám phá khả năng thiết kế riêng và tùy
                                    chỉnh của chúng tôi thông qua các dự án lấy cảm hứng từ thiên nhiên này. Heart of the Vine,
                                    một tấm thảm trải kín tường và tấm lót cầu thang được thiết kế riêng cho…
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
