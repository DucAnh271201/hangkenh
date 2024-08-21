<section class="{{ $atts['class'] ?? '' }}">
    <div class="container">
        <div class="section-box">
            <div class="sub-title">
               {!! $atts['sub-title'] !!}
            </div>
            <h3 class="title">{!! $atts['title'] !!}</h3>
            <div class="decoration">
                <div></div>
            </div>
        </div>
       {!! shortcodes($content) !!}
    </div>
</section>
