@extends('frontend.master')

@section('title', 'Bộ sưu tập Detail')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Bộ sưu tập'])
@endsection

@section('content')
    <section class="collection-detail">
        <main class="container">
            <header class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"> Catalogue</a></li>
                        <li class="breadcrumb-item active"> Indochine Collection</li>
                    </ol>
                </nav>
            </header>
            <div class="catalogue">
                <div class="section-box">
                    <div class="sub-title">
                        Catalogue
                    </div>
                    <h3 class="title">indochine collection</h3>
                </div>
                <div class="catalogue-description">
                    <p>Thiên nhiên Việt Nam Giàu và đẹp – Giàu trong cảm xúc và đẹp trong thiết kế Bộ sưu tập Nature collection gồm 11 Hình thức thể hiện Bộ Mẫu thiết kế Thảm len lấy cảm hứng từ các hình ảnh, vật liệu thiên nhiên thân thuộc với người Việt Nam như dòng sông, đá, tre,… Được nhà thiết kế Thanh Tuấn thể hiện theo phong cách thiết kế tối giản, hiện đại làm nổi bật nét Á Đông bên cạnh đó là những hoa văn cách điệu mang tính biểu trưng của truyền thống Việt Nam
                    </p>
                </div>
                <div class="text-underline"></div>
                <div class="project-content">
                    <div class="project-main-block">
                        <div class="project-main-block-image">
                            <a href="#">
                                <img src="{{ asset('main/assets/images/collection-detail-1.png') }}"
                                     title="Ảnh số 2 BST"/>
                            </a>
                        </div>
                        <div class="project-article-content">
                            <a href="#">
                                <h3 class="project-article-title sub-title">
                                    Ảnh số 2 BST
                                </h3>
                            </a>
                            <div class="project-article-author">
                                <p>Project by NTK Sơn Vũ</p>
                                <p>Photo: DaniNguyen</p>
                            </div>
                        </div>
                    </div>
                    <div class="project-main-block">
                        <div class="project-main-block-image">
                            <a href="#">
                                <img src="{{ asset('main/assets/images/collection-detail-2.png') }}"
                                     title="Ảnh đại diện BST"/>
                            </a>
                        </div>
                        <div class="project-article-content">
                            <a href="#">
                                <h3 class="project-article-title main-title">
                                    Ảnh đại diện BST
                                </h3>
                            </a>
                            <div class="project-article-author">
                                <p>Project by NTK Sơn Vũ</p>
                                <p>Photo: DaniNguyen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="discover">
                <div class="section-box">
                    <div class="sub-title">
                        SẢN PHẨM
                    </div>
                    <h3 class="title">indochine collection</h3>
                    <div class="text-underline"></p>
                </div>
                <div class="row product">
                    @for($i = 0; $i < 12; $i++)
                        <div class="col-3">
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
            </div>
            <div class="material">
                <div>
                    <div class="material-content">
                        <h3 class="material-content-title">CHẤT LIỆU - KHÔNG GIAN</h3>
                        <p class="material-content-description">Bộ sưu tập Nature Collection không chỉ là một bộ sưu tập nghệ thuật mà còn là một hành trình khám phá sự hài hòa giữa nét đẹp tự nhiên của Việt Nam và sự tinh tế của thiết kế hiện đại. Sử dụng sợi Bamboo Silk, một chất liệu mềm mại, ấm áp và thân thiện với môi trường.<br>
                            Phong cách thiết kế tối giản, hiện đại của nhà thiết kế Thanh Tuấn là điểm nhấn của bộ sưu tập, khiến cho vẻ đẹp tự nhiên được thổi vào một làn gió mới mẻ và độc đáo. Những hoa văn cách điệu được thêu trên sợi Bamboo Silk không chỉ làm tôn lên vẻ đẹp của sản phẩm mà còn mang đậm dấu ấn của văn hóa Việt Nam, tạo ra một không gian sống đậm chất bản sắc dân tộc, nơi hiện đại và truyền thống gặp gỡ và hoà quyện với nhau.
                        </p>
                    </div>
                    <div class="material-image">
                        <img src="{{ asset('main/assets/images/collection-detail-4.png') }}"
                             title="CHẤT LIỆU - KHÔNG GIAN"/>
                    </div>
                </div>
                <div class="big-image">
                    <div class="material-image">
                        <img src="{{ asset('main/assets/images/collection-detail-3.png') }}"
                             title="NTK THANH TUẤN"/>
                        <h3>NTK Vũ Sơn</h3>
                    </div>
                    <div class="material-content">
                        <div class="material-content-title">
                            <h4>NTK</h4>
                            <h3 class="material-content-title">THANH TUẤN</h3>
                        </div>
                        <div class="material-content-inner">
                            <p class="material-content-description">Hãy để những tấm thảm phát huy hết công năng của nó và đem lại nét phóng khoáng trong bữa tiệc về màu sắc của không gian nhà bạn.
                            </p>
                            <div class="share-social">
                                <img src="{{ asset('main/assets/images/fb.svg') }}" alt="fb">
                                <img src="{{ asset('main/assets/images/twitter.svg') }}" alt="twitter">
                                <img src="{{ asset('main/assets/images/social.svg') }}" alt="social">
                                <img src="{{ asset('main/assets/images/youtube.svg') }}" alt="youtube">
                                <img src="{{ asset('main/assets/images/ista.svg') }}" alt="insta">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
