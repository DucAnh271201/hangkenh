<section class="featured-post">
    <div class="container pc">
        <div class="row">
            @if($posts->isNotEmpty())
                @foreach($posts as $index => $post)
                    <div class="col-4 wow slideInRight" data-wow-delay="0.{{$index}}s">
                        <figure class="card post-card">
                            <div class="post-card-image">
                                <div class="post-card-tag">
                                    {{ format_date($post->post_date, 'M d, Y') }}
                                </div>
                                <a href="{{ get_permalink($post) }}">
                                    <img class="w-100 h-100 object-fit-cover" src="{{ $post->feature_image_link }}"
                                         alt="{{ $post->title }}">
                                </a>
                            </div>
                            <figcaption class="post-card-info">
                                <div href="" class="post-card-category">
                                    <span></span>
                                    <span>{{ get_main_category($post->categories)->title ?? '' }}</span>
                                </div>
                                <a href="{{ get_permalink($post) }}">
                                    <h3 class="post-card-title">
                                        {{ $post->title }}
                                    </h3>
                                </a>
                                @if(!empty($post->post_author_name))
                                    <span class="post-card-author">
                                    By {{ $post->post_author_name }}
                                </span>
                                @endif
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="phone container">
        <article class="slider">
          @if($posts->isNotEmpty())
            @foreach($posts as $post)
                <figure class="card post-card wow">
                    <div class="post-card-image">
                        <div class="post-card-tag">
                            {{ format_date($post->post_date, 'M d, Y') }}
                        </div>
                        <a href="{{ get_permalink($post) }}">
                            <img class="w-100 h-100 object-fit-cover" src="{{ $post->feature_image_link }}"
                                 alt="{{ $post->title }}">
                        </a>
                    </div>
                    <figcaption class="post-card-info">
                        <a href="" class="post-card-category">
                            <span></span>
                            <span>{{ get_main_category($post->categories)->title ?? '' }}</span>
                        </a>
                        <a href="{{ get_permalink($post) }}">
                            <h3 class="post-card-title">
                                {{ $post->title }}
                            </h3>
                        </a>
                        @if(!empty($post->author))
                            <span class="post-card-author">
                                By {{ $post->author->name }}
                            </span>
                        @endif
                    </figcaption>
                </figure>
            @endforeach
          @endif
        </article>
    </div>
</section>
