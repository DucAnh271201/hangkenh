<section class="relate-product">
    <div class="container">
        <div class="section-box">
            <div class="sub-title">
                Discover Our
            </div>
            <h3 class="title">Bestselling Rugs</h3>
            <div class="text-underline"></div>
        </div>
        @if(!is_mobile())
            <div class="row pc">
                @foreach($productRelated as $product)
                    <div class="col-3 product">
                        @include('frontend.shortcodes.product_item', [
                                                'product' => $product
                                            ])
                    </div>
                @endforeach
            </div>
        @else
            <div class="phone product-list-phone slider">
                @if($productRelated->isNotEmpty())
                    @foreach($productRelated as $product)
                        <article>
                            @include('frontend.shortcodes.product_item', [
                            'product' => $product
                        ])
                        </article>
                    @endforeach
                @endif
            </div>
        @endif

    </div>
</section>
