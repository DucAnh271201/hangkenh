@extends('frontend.master')

@section('title', 'Nhà thiết kế')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Nhà thiết kế'])
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <aside class="col-md-3">
                <div class="card border-0">
                    <div class="search mb-25px">
                        <input class="form-control" type="text" placeholder="Tìm kiếm..."/>
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="filter-group">
                        <div class="menu-title">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseAbout" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h5 class="title">Giới thiệu</h5>
                            </a>
                        </div>
                        <div class="filter-content collapse" id="collapseAbout" style="">

                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="menu-title">
                            <a href="#collapseTech" data-toggle="collapse" data-target="#collapseTech"
                               aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h5 class="title">Công nghệ</h5>
                            </a>
                        </div>
                        <div class="filter-content collapse" id="collapseTech">
                            <div class="card-body">
                                <div class="row">
                                    @for($i = 0; $i < 10; $i++)
                                        <div class="col-3 bg-element-filter me-2 mt-2">
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
                        <div class="menu-title">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTeam" aria-expanded="true"
                               class="filter-product-title">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h5 class="title">Our team</h5>
                            </a>
                        </div>
                        <div class="filter-content collapse" id="collapseTeam" style="">
                            <div>
                                <a href="#" class="sidebar-sub-item">&#8226; Our team (13)</a>
                            </div>
                            <div>
                                <a href="#" class="sidebar-sub-item">&#8226; Designers (5)</a>
                            </div>
                            <div>
                                <a href="#" class="sidebar-sub-item">&#8226; Jobs (2)</a>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="menu-title">
                            <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h5 class="title">Sản phẩm đặc trưng </h5>
                            </a>
                        </div>
                        <div class="filter-content collapse show" id="collapseProduct">

                        </div>
                    </div>
                </div>
            </aside>
            <main class="col-md-9">
                <div class="row">
                    @if($designers->isNotEmpty())
                        @foreach($designers as $designer)
                            <div class="col-4" style="margin-bottom: 48px;">
                                <figure class="designer-card border-0">
                                    <div class="designer-avatar">
                                        @if(isset($designer->image[0]['image']))
                                            <a href="{{ route('fe.designer.detail', $designer->slug) }}">
                                                <img src="{{ $designer->image[0]['image'] }}"
                                                     width="312" height="318"
                                                     alt="{{ $designer->short_name ?? $designer->name }}">
                                            </a>
                                        @endif
                                    </div>
                                    <figcaption class="designer-info text-center">
                                            <a href="{{ route('fe.designer.detail', $designer->slug) }}"
                                               class="designer-name">{{ $designer->short_name ?? $designer->name }}</a>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    @endif
                </div>
                {!! $designers->links('pagination::category-pagination') !!}
            </main>
        </div>
    </div>
@endsection
