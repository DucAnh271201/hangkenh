<div class="row project-items">
    @foreach($posts as $index => $post)
        <div class="col-md-4 col-12 wow slideInRight project-item" data-wow-delay="0.{{$index}}s">
            <figure class="card post-card">
                <div class="post-card-image">
                    <div class="post-card-tag">
                        {{ format_date($post->post_date, 'M d, Y') }}
                    </div>
                    <a href="{{ get_permalink($post) }}">
                        <img src="{{ $post->feature_image_link }}" class="w-100 h-100 object-fit-cover"
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
                    <div class="post-desc">
                        {{ $post->short_description }}
                    </div>
                </figcaption>
            </figure>
        </div>
    @endforeach
</div>
