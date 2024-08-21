@extends('frontend.master')

@section('title', 'Dự án/ Công trình')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => $cateSelected->title])
@endsection

@section('content')
    <section id="project">
        <div class="container">
            <h2 class="category-font-header">{{ $cateSelected->title }}</h2>
            <div class="nav-menu">

                @foreach($categories as $category)
                    <div class="nav-menu-item {{ $category->id == $cateSelected->id ? 'active' : '' }}">
                        <a class="nav-link"
                           href="{{ route('fe.project.category', $category->slug) }}">{{ $category->short_title }}</a>
                    </div>
                @endforeach
            </div>

            <div class="title-underline phone"></div>

            <main>
                @if($posts->isNotEmpty())
                    @foreach($postChucks as $index => $postChunk)
                        <article>
                            <div class="project-content {{ $index%2!=0 ? 'flex-row-reverse': '' }}">
                                @foreach($postChunk as $key => $post)
                                    <div class="{{ $key == 0 ? 'project-main-block' : 'project-sub-block' }}">
                                        <div class="{{ $key == 0 ? 'project-main-block-image' : 'project-sub-image' }}"
                                        >
                                            <a href="{{ route('fe.project.detail', ['slug' => $cateSelected->slug, 'detail' => $post->slug]) }}"
                                               class="w-100">
                                                <img src="{{ get_media($post, 'feature_image', 'image') }}"
                                                     alt="{{ $post->title }}" class="w-100 h-100 object-fit-cover"/>
                                            </a>
                                        </div>
                                        <div class="project-article-content">
                                            <a href="{{ route('fe.project.detail', ['slug' => $cateSelected->slug, 'detail' => $post->slug]) }}">
                                                <h3 class="project-article-title {{ $key == 0 ? 'main-title' : 'sub-title' }}">
                                                    {{ $post->title }}
                                                </h3>
                                            </a>
                                            <div class="project-article-author">
                                                <p>Project by {{ $post->author_name ?? 'NTK Son Vu' }}</p>
                                                @if(!empty($post->photo_by))
                                                    <p>Photo: {{ $post->photo_by }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                @endif
                {!! $posts->links('pagination::category-pagination') !!}
            </main>
        </div>
    </section>
@endsection
