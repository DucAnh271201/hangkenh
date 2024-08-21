<section class="library">
    <div class="container">
        <div class="row pc">
            @if($bigPost)
                <div class="col-md-6 col-12 wow slideInRight" data-wow-delay="0.5s">
                    <img class="w-100 object-fit-cover" style="height: 1098px" src="{{ $bigPost->feature_image_link }}"
                         alt="{{ $bigPost->title }}">
                    <div class="article">
                        <h3 class="article-heading">{{ $bigPost->title }}</h3>
                        <div class="article-description">
                            {{ $bigPost->short_description }}
                        </div>
                        <a href="{{ get_permalink($bigPost) }}" class="btn-more">
                            <span>Xem thêm</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="21" viewBox="0 0 23 21"
                                 fill="none">
                                <path
                                    d="M0 10.5H21.8207M21.8207 10.5C21.8207 10.5 17.6144 9.34615 15.0906 6.65385C12.5668 3.96154 12.5668 0.5 12.5668 0.5M21.8207 10.5C21.8207 10.5 17.6541 11.6538 15.1541 14.3462C12.6541 17.0385 12.6541 20.5 12.6541 20.5"
                                    stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif
            @if($smallPosts->isNotEmpty())
                <div class="col-md-6 col-12">
                    <div class="d-grid">
                        @foreach($smallPosts as $index => $post)
                            <div class="col {{ $index != 0 ? 'mt-24px': '' }} wow slideInRight" data-wow-delay="0.{{$index + 1}}s">
                                <img src="{{ $post->feature_image_link }}" class="w-100 object-fit-cover"
                                     style="height: 374px" alt="{{ $post->title }}">
                                <div class="article">
                                    <h3 class="article-heading">{{ $post->title }}</h3>
                                    <div class="article-description">
                                        {{ $post->short_description }}
                                    </div>
                                    <a href="{{ get_permalink($post) }}" class="btn-more">
                                        <span>Xem thêm</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="21"
                                             viewBox="0 0 23 21"
                                             fill="none">
                                            <path
                                                d="M0 10.5H21.8207M21.8207 10.5C21.8207 10.5 17.6144 9.34615 15.0906 6.65385C12.5668 3.96154 12.5668 0.5 12.5668 0.5M21.8207 10.5C21.8207 10.5 17.6541 11.6538 15.1541 14.3462C12.6541 17.0385 12.6541 20.5 12.6541 20.5"
                                                stroke="#242424" stroke-width="2.2" stroke-linejoin="bevel"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="library-items phone">
            @if($bigPost)
                <article>
                    <div class="article-image">
                        <img src="{{ $bigPost->feature_image_link }}" alt="{{ $bigPost->title }}">
                    </div>
                    <div class="article-content">
                        <h3 class="article-heading">{{ $bigPost->title }}</h3>
                        <div class="article-description">
                            {{ $bigPost->short_description }}
                        </div>
                        <a href="{{ get_permalink($bigPost) }}" class="btn-more">
                            <span>Xem thêm</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <path d="M0.289062 8.00037H17.6484M17.6484 8.00037C17.6484 8.00037 14.3021 7.08243 12.2943 4.94058C10.2865 2.79873 10.2865 0.0449219 10.2865 0.0449219M17.6484 8.00037C17.6484 8.00037 14.3337 8.9183 12.3448 11.0602C10.3559 13.202 10.3559 15.9558 10.3559 15.9558" stroke="#242424" stroke-width="1.7502" stroke-linejoin="bevel"/>
                            </svg>
                        </a>
                    </div>
                </article>
            @endif
            @if($smallPosts->isNotEmpty())
                @foreach($smallPosts as $index => $post)
                    <article>
                        <div class="article-image">
                            <img src="{{ $post->feature_image_link }}"  alt="{{ $post->title }}">
                        </div>
                        <div class="article-content">
                            <h3 class="article-heading">{{ $post->title }}</h3>
                            <div class="article-description">
                                {{ $post->short_description }}
                            </div>
                            <a href="{{ get_permalink($post) }}" class="btn-more">
                                <span>Xem thêm</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                    <path d="M0.289062 8.00037H17.6484M17.6484 8.00037C17.6484 8.00037 14.3021 7.08243 12.2943 4.94058C10.2865 2.79873 10.2865 0.0449219 10.2865 0.0449219M17.6484 8.00037C17.6484 8.00037 14.3337 8.9183 12.3448 11.0602C10.3559 13.202 10.3559 15.9558 10.3559 15.9558" stroke="#242424" stroke-width="1.7502" stroke-linejoin="bevel"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </div>
</section>
