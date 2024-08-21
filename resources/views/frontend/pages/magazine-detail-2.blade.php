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
                        <li class="breadcrumb-item active" aria-current="page">ẤN PHẨM/TẠP CHÍ</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="category-font-header">phong cách thảm</h5>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs mt-24px">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Khu dân cư</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nhà hàng/quán bar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Công trình công cộng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Công trình công cộng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bảo tàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Văn phòng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ban công</a>
                    </li>
                </ul>
            </header>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-image">
                        <img class="w-100" src="{{ asset('main/assets/images/big-post-image.jpg') }}" alt="">
                    </div>
                    <div class="post-intro">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="post-big-title">Văn phòng</div>
                            <div class="post-author">
                                <div class="post-project-by">Project by NTK Sơn Vũ</div>
                                <div class="mt-1">Photo: DaniNguyen</div>
                            </div>
                        </div>
                        <div class="post-big-desc">
                            Khu phức hợp huấn luyện hiện đại Miami Dolphins bao gồm các không gian khách sạn, khu vực dành cho người chơi và văn phòng với bảng màu vật liệu sang trọng và ấm áp. Tại sảnh có chiều cao gấp đôi, Tập đoàn Rockwell đã bố trí một sảnh chào đón với tấm thảm nylon mềm và len chần thủ công, phỏng theo thiết kế Lola hiện có của chúng tôi.
                            Bố cục tấm thảm thể hiện chuyển động và dòng chảy tự phát gợi lên vũ đạo năng động của các cầu thủ trên sân.
                            Tidal Moonlight cũng được nhìn thấy trong Phòng chờ của Người chơi và Tiệm cắt tóc.
                        </div>
                        <button class="btn-white w-25">
                            <span>Đăng ký tải về</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20"
                                 fill="none">
                                <path
                                    d="M0 10H21.8207M21.8207 10C21.8207 10 17.6144 8.84615 15.0906 6.15385C12.5668 3.46154 12.5668 0 12.5668 0M21.8207 10C21.8207 10 17.6541 11.1538 15.1541 13.8462C12.6541 16.5385 12.6541 20 12.6541 20"
                                    stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row magazine-post">
                <div class="col">
                    <img src="{{ asset('main/assets/images/magazine-1.jpg') }}"/>
                </div>
                <div class="col">
                    <img src="{{ asset('main/assets/images/magazine-2.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row magazine-post">
                <div class="col">
                    <img src="{{ asset('main/assets/images/magazine-2.jpg') }}"/>
                </div>
                <div class="col">
                    <img src="{{ asset('main/assets/images/magazine-1.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-box">
                <div class="title">
                    <h2>Discover Our</h2>
                </div>
                <div class="sub-title">
                    <h2>Bestselling Rugs</h2>
                </div>
                <div class="decoration d-flex justify-content-center align-center">
                    <div></div>
                </div>
            </div>
            <div class="product-list">
                <div class="row">
                    @for($i= 0;$i<=3;++$i)
                        <div class="col-lg-3 col-md-3 col-6">
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
                                    <a class="btn-white btn-contract btn-contract-mobile">
                                        <div>Liên hệ</div>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
