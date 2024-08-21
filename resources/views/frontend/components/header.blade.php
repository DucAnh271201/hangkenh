<header class="header">
    <div class="logo middle-header border-bottom pc">
        <a href="/">
            <h1>
                <img src="{{ get_option('logo') }}"
                     class="img-logo" alt="hangkenh">
            </h1>
        </a>
    </div>
    <div class="bottom-header pc" style="height: 52px">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0 h-100 d-block">
                <div class="collapse navbar-collapse justify-content-between flex-grow-0 h-100" id="navbarNav">
                    <ul class="navbar-nav quick-access h-100 justify-content-around w-100">
                        @php($menu = collect(get_menu_nav('Main menu')) )
                        @php($mainMenu = $menu->take(6))
                        @php($secondMenu = $menu->slice(6))
                        @foreach($mainMenu as $item)
                            <li class="nav-item"><a href="{{ $item['link'] }}"
                                                    class="text-decoration-none nav-link">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                    <ul class="navbar-nav quick-action h-100">
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#dropdownMenu">
                                <svg width="28" height="14" viewBox="0 0 28 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.628906 0.765625H27.3718" stroke="#242424" stroke-width="1.54286"/>
                                    <path d="M0.628906 6.9375H27.3718" stroke="#242424" stroke-width="1.54286"/>
                                    <path d="M0.628906 13.1094H27.3718" stroke="#242424" stroke-width="1.54286"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1223_8762)">
                                        <path
                                            d="M14.8325 2.3202C14.0433 1.42477 12.9486 0.931641 11.7499 0.931641C10.064 0.931641 8.99666 1.93852 8.39816 2.7832C8.24288 3.00239 8.11078 3.22217 7.99988 3.42898C7.88897 3.22217 7.75691 3.00239 7.6016 2.7832C7.0031 1.93852 5.93575 0.931641 4.24988 0.931641C3.05119 0.931641 1.95641 1.4248 1.16722 2.32023C0.414472 3.17442 -0.00012207 4.31842 -0.00012207 5.54148C-0.00012207 6.87283 0.519659 8.11111 1.63566 9.43836C2.63307 10.6246 4.06797 11.8474 5.72957 13.2633C6.34872 13.7909 6.989 14.3365 7.67066 14.9329L7.69113 14.9509C7.7795 15.0282 7.88969 15.0669 7.99988 15.0669C8.11007 15.0669 8.22025 15.0282 8.30863 14.9509L8.3291 14.9329C9.01075 14.3365 9.65103 13.7909 10.2703 13.2632C11.9318 11.8474 13.3667 10.6246 14.3641 9.43836C15.4801 8.11108 15.9999 6.87283 15.9999 5.54148C15.9999 4.31842 15.5853 3.17442 14.8325 2.3202ZM9.66216 12.5497C9.12841 13.0045 8.5791 13.4726 7.99988 13.9761C7.42069 13.4727 6.87135 13.0045 6.3375 12.5496C3.08566 9.77861 0.937378 7.94795 0.937378 5.54148C0.937378 4.5468 1.26878 3.62292 1.87057 2.94008C2.47925 2.24948 3.32422 1.86914 4.24988 1.86914C5.53516 1.86914 6.366 2.66095 6.83663 3.3252C7.25878 3.92095 7.47907 4.52152 7.55419 4.75205C7.61703 4.94502 7.79694 5.07561 7.99988 5.07561C8.20282 5.07561 8.38272 4.94502 8.44557 4.75205C8.52069 4.52152 8.74097 3.92095 9.16313 3.32517C9.63375 2.66095 10.4646 1.86914 11.7499 1.86914C12.6755 1.86914 13.5205 2.24948 14.1292 2.94008C14.731 3.62292 15.0624 4.5468 15.0624 5.54148C15.0624 7.94795 12.9141 9.77861 9.66216 12.5497Z"
                                            fill="#242424"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1223_8762">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">
                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.7999 7.875C13.7999 11.4925 10.8673 14.425 7.24988 14.425C3.63241 14.425 0.699878 11.4925 0.699878 7.875C0.699878 4.25753 3.63241 1.325 7.24988 1.325C10.8673 1.325 13.7999 4.25753 13.7999 7.875Z"
                                        stroke="#242424" stroke-width="0.9"/>
                                    <path d="M11.1249 12.5L15.7499 17.125" stroke="#242424" stroke-width="0.9"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="menu-dropdown collapse p-4 position-absolute w-100" id="dropdownMenu" style="z-index: 999">
            <div class="container">
                <div class="d-flex" style="gap: 100px;">

                    @foreach($secondMenu as $item)
                        <div class="col">
                            <ul>
                                <li>
                                    @if(!empty($item['child']))
                                        <span class="title-sub-menu">{{ $item['label'] }}</span>
                                    @else
                                        <a href="{{ $item['link'] }}" class="title-sub-menu">{{ $item['label'] }}</a>
                                    @endif
                                </li>
                                @if(!empty($item['child']))
                                    @foreach($item['child'] as $child)
                                        <li><a href="{{ $child['link'] }}">{{ $child['label'] }}</a></li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    @endforeach

                    <div class="col">
                        <ul>
                            <li>
                                <img src="{{ asset('main/assets/images/van-phong-hn.jpg') }}">
                            </li>
                            <li>
                                <div class="text-dark">Project by NTK Sơn Vũ</div>
                            </li>
                            <li>
                                <div>Photo: DaniNguyen</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @if(is_mobile())
        <div class="nav phone nav-mobile">
            <div class="navbar-nav quick-action">
                <div class="nav-item-first">
                    <a href="javascript:void(0)" class="navbar-toggler" type="button" id="nav_menu">
                        <svg width="28" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.628906 0.765625H27.3718" stroke="#242424" stroke-width="1.54286"/>
                            <path d="M0.628906 6.9375H27.3718" stroke="#242424" stroke-width="1.54286"/>
                            <path d="M0.628906 13.1094H27.3718" stroke="#242424" stroke-width="1.54286"/>
                        </svg>
                    </a>
                </div>
                <div class="nav-item-second">
                    {{--<img src="{{ get_option('logo') }}"
                         class="img-logo" alt="hangkenh">--}}
                    <img src="{{ asset('main/assets/images/logo.svg') }}"
                         class="img-fluid">
                </div>
                <div class="nav-item-last">
                    <div class="nav-item-inner">
                        <a href="javascript:void(0)">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1223_8762)">
                                    <path
                                        d="M14.8325 2.3202C14.0433 1.42477 12.9486 0.931641 11.7499 0.931641C10.064 0.931641 8.99666 1.93852 8.39816 2.7832C8.24288 3.00239 8.11078 3.22217 7.99988 3.42898C7.88897 3.22217 7.75691 3.00239 7.6016 2.7832C7.0031 1.93852 5.93575 0.931641 4.24988 0.931641C3.05119 0.931641 1.95641 1.4248 1.16722 2.32023C0.414472 3.17442 -0.00012207 4.31842 -0.00012207 5.54148C-0.00012207 6.87283 0.519659 8.11111 1.63566 9.43836C2.63307 10.6246 4.06797 11.8474 5.72957 13.2633C6.34872 13.7909 6.989 14.3365 7.67066 14.9329L7.69113 14.9509C7.7795 15.0282 7.88969 15.0669 7.99988 15.0669C8.11007 15.0669 8.22025 15.0282 8.30863 14.9509L8.3291 14.9329C9.01075 14.3365 9.65103 13.7909 10.2703 13.2632C11.9318 11.8474 13.3667 10.6246 14.3641 9.43836C15.4801 8.11108 15.9999 6.87283 15.9999 5.54148C15.9999 4.31842 15.5853 3.17442 14.8325 2.3202ZM9.66216 12.5497C9.12841 13.0045 8.5791 13.4726 7.99988 13.9761C7.42069 13.4727 6.87135 13.0045 6.3375 12.5496C3.08566 9.77861 0.937378 7.94795 0.937378 5.54148C0.937378 4.5468 1.26878 3.62292 1.87057 2.94008C2.47925 2.24948 3.32422 1.86914 4.24988 1.86914C5.53516 1.86914 6.366 2.66095 6.83663 3.3252C7.25878 3.92095 7.47907 4.52152 7.55419 4.75205C7.61703 4.94502 7.79694 5.07561 7.99988 5.07561C8.20282 5.07561 8.38272 4.94502 8.44557 4.75205C8.52069 4.52152 8.74097 3.92095 9.16313 3.32517C9.63375 2.66095 10.4646 1.86914 11.7499 1.86914C12.6755 1.86914 13.5205 2.24948 14.1292 2.94008C14.731 3.62292 15.0624 4.5468 15.0624 5.54148C15.0624 7.94795 12.9141 9.77861 9.66216 12.5497Z"
                                        fill="#242424"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1223_8762">
                                        <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="nav-item-inner">
                        <a href="javascript:void(0)">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.7999 7.875C13.7999 11.4925 10.8673 14.425 7.24988 14.425C3.63241 14.425 0.699878 11.4925 0.699878 7.875C0.699878 4.25753 3.63241 1.325 7.24988 1.325C10.8673 1.325 13.7999 4.25753 13.7999 7.875Z"
                                    stroke="#242424" stroke-width="0.9"/>
                                <path d="M11.1249 12.5L15.7499 17.125" stroke="#242424" stroke-width="0.9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-dropdown" id="nav_menu_content" style="z-index: 999; height: 100% !important;">
                <div class="menu-inner card border-0 accordion">
                    @if(is_mobile())
                        @php($secondMenu = $menu)
                    @endif
                    @foreach($secondMenu as $item)
                        <article class="filter-group">
                            @if(empty($item['child']))
                                <a href="{{ $item['link'] }}" class="menu-link">{{ $item['label'] }}</a>
                            @else
                                <header class="accordion-header" id="panelsStayOpen-heading{{ $item['id'] }}">
                                    <button class="accordion-button filter-product-title collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-{{ $item['id'] }}"
                                            aria-expanded="false" aria-controls="panelsStayOpen-{{ $item['id'] }}">
                                        {{ $item['label'] }}
                                    </button>
                                </header>
                                <div class="filter-content accordion-collapse collapse"
                                     id="panelsStayOpen-{{ $item['id'] }}"
                                     aria-labelledby="panelsStayOpen-heading{{ $item['id'] }}">
                                    <div class="card-body accordion-body">
                                        <div class="row">
                                            @foreach($item['child'] as $child)
                                                <li><a href="{{ $child['link'] }}">{{ $child['label'] }}</a></li>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </article>

                    @endforeach
                </div>
                <div class="nav-footer">
                    <div class="break-line"></div>
                    <div class="nav-footer-copyright">
                        <p>Copyright ©2024 – HANGKENH</p>
                    </div>
                    <div class="nav-footer-social">
                        <p>FOLLOW US</p>
                        <img src="{{ asset('main/assets/images/fb.svg') }}" class="img-fluid">
                        <img src="{{ asset('main/assets/images/twitter.svg') }}" class="img-fluid">
                        <img src="{{ asset('main/assets/images/social.svg') }}" class="img-fluid">
                        <img src="{{ asset('main/assets/images/youtube.svg') }}" class="img-fluid">
                        <img src="{{ asset('main/assets/images/ista.svg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
   @endif
</header>
