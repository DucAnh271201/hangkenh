<div class="product-list">
    <div class="row pc">
        @if($products->isNotEmpty())
            @foreach($products as $index => $product)
                <div class="col-lg-3 col-md-3 col-6 wow slideInRight" data-wow-delay="0.{{$index}}s">
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
