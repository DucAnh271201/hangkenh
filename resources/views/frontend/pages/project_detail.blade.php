@extends('frontend.master')

@section('title', 'Dự án/ Công trình')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => $cateSelected->title])
@endsection

@section('content')
    <section id="project_detail">
        <div class="container">
            <header class="pc">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                        @if(!empty($breadcrumbs))
                            @foreach($breadcrumbs as $breadcrumb)
                                <li class="breadcrumb-item" aria-current="page">{{ $breadcrumb->title }}</li>
                            @endforeach
                        @endif

                    </ol>
                </nav>
                <div class="row">
                    <div class="col-12">
                        <h2 class="category-font-header">{{ $cateSelected->short_title ?? '' }}</h2>
                    </div>
                </div>
            </header>
            <div class="title-underline phone"></div>

            <main>
                <article>
                    <div class="big-image" style="height: 1098px">
                        <img src="{{ get_media($post, 'feature_image', 'image') }}" class="w-100 h-100 object-fit-cover"
                             alt="{{ $post->title }}">
                    </div>
                    <div class="project-detail-article">
                        <div class="project-article-content">
                            <div class="project-article-title">
                                <p>{{ $post->title }}</p>
                            </div>
                            <div class="project-article-author">
                                <p>Project by {{ $post->author_name ?? 'NTK Son Vu' }}</p>
                                @if(!empty($post->photo_by))
                                    <p>Photo: {{ $post->photo_by }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="project-detail-article-content">
                            {!! $post->description !!}
                        </div>
                        <button class="project-article-contract">
                            Nhận tư vấn
                            <img src="{{ asset('main/assets/images/project/detail/vector.svg') }}" alt="contract">
                        </button>
                    </div>
                    <div class="project-detail-image">
                        @if(!empty($projectLibrary))
                            @foreach($projectLibrary as $key => $projectLibraryChuck)
                                <div class="project-detail-image-inner {{ $key %2 != 0 && !is_mobile() ? 'flex-row-reverse': '' }}">
                                    @php($index = 0)
                                    @foreach($projectLibraryChuck as $project)
                                        <div
                                        >
                                            <img src="{{ $project['image'][0]['image'] ?? '' }}"
                                                 alt="{{ $project['title'] ?? $post->title }}"
                                                 class="w-100 h-100 object-fit-cover"
                                            >
                                        </div>
                                        @php(++$index)
                                    @endforeach
                                </div>

                            @endforeach
                        @endif
                    </div>
                </article>
                <div class="discover mt-80px">
                    <div class="section-box">
                        <div class="sub-title">
                            Discover Our
                        </div>
                        <h3 class="title">Bestselling Rugs</h3>
                        <div class="decoration mt-80px mb-80px">
                            <div></div>
                        </div>
                    </div>
                    <div class="row pc">
                        @if($products->isNotEmpty())
                            @foreach($products as $product)
                                <div class="col-3 product">
                                    @include('frontend.shortcodes.product_item', [
                                       'product' => $product
                                   ])
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="phone product-list-phone slider">
                        @if($products->isNotEmpty())
                            @foreach($products as $product)
                                <article>
                                    @include('frontend.shortcodes.product_item', [
                                    'product' => $product
                                ])
                                </article>
                            @endforeach
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </section>
@endsection
