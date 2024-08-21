<section class="product-detail-mobile phone">
    <div class="container">
        <div class="header-product-detail">
            <h1 class="product-title">{{ $product->title }}</h1>
            <p class="product-desc">Thiết kế
                bởi {{ !empty($product->post_author_name) ? $product->post_author_name : 'NTK Sơn Vũ' }}</p>
            <div class="d-flex">
                <div class="product-price"> ${{ number_format($product->regular_price) }}</div>
                <div class="product-rating">
                    <img
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae8a9102393f7664e188490355b26e9810292c69bcd30f6abfa3cb486a5d9e71?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                        alt="Product rating stars" class="rating-stars"/>
                    <span class="rating-value">4.8 of 5</span>
                </div>
            </div>
        </div>
        <div class="slider-product">
            <div class="slider-product-items">
                <img src="{{ get_media($product, 'feature_image', 'image') }}" alt="{{ $product->title }}">
            </div>
            @if(!empty($product->image_library))
                @foreach($product->image_library as $item)
                    <div class="slider-product-items">
                        <img src="{{ $item['image'] }}" alt="{{ $product->title }}">
                    </div>
                @endforeach
            @endif
        </div>
        <div class="product-block-info">
            <div class="product-details">
                @if(isset($attributeParentData) && $attributeParentData->isNotEmpty())
                    @foreach($attributeParentData as $key => $item)
                        @if($item->template == 'color')
                            <div class="product-color-guide">
                                <span class="product-color-label">{{ $key + 1 }}. Chọn màu sắc</span>
                                <span class="selected-color">{{ $item->description }}</span>
                            </div>
                            <div class="row product-color-select">
                                @if(!empty($attributeGroup[$item->id]))
                                    @foreach($attributeGroup[$item->id] as $attrItem)
                                        <div class="bg-element-filter bg-element-filter-image">
                                            <div class="text-center color-pick-icon"
                                                 style="background: {{ $attrItem->color }}; width: 15px;height: 15px; border-radius: 100px">
                                            </div>
                                            <div class="text-center title-filter-select">{{ $attrItem->title }}</div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @else
                            <div class="product-size-guide">
                                <span class="product-size-label">{{ $key + 1 }}. Chọn {{ $item->title }}</span>
                                <a href="#" class="size-guide-link">{{ $item->description }}</a>
                            </div>
                            <div class="w-100 select-option">
                                <select class="product-size-selector w-100">
                                    @if(!empty($attributeGroup[$item->id]))
                                        @foreach($attributeGroup[$item->id] as $attrItem)
                                            <option
                                                value="{{ $attrItem->slug }}">{{ $attrItem->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        @endif
                    @endforeach
                @endif
                <p class="payment-info">
                    Pay 50% now & 50% upon shipment on all Made To Order sizes
                </p>
                <div class="return-info">
                    <img
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/800f590aae734ab19cea8e5d31b49b1c67fe3b95e11a738c1a2c974ce7dc4d13?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                        alt="Return icon" class="return-icon"/>
                    <p class="return-details">
                        $149 Unlimited Furniture Delivery. Allow 2-4 weeks for delivery once the item has
                        shipped. This item can
                        be returned within 30 days of delivery.
                        <img src="{{asset('main/assets/images/question.svg')}}" alt="question">
                </div>
                <div class="return-info">
                    <img
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/800f590aae734ab19cea8e5d31b49b1c67fe3b95e11a738c1a2c974ce7dc4d13?apiKey=bd6438bf7c024f24bc56e779baad0a38&"
                        alt="Delivery icon" class="delivery-icon"/>
                    <p class="return-details">
                        This item is subject to a 25% restocking fee if returned.
                        <img src="{{asset('main/assets/images/question.svg')}}" alt="question">
                    </p>
                    </p>
                </div>
                <div class="product-actions">
                    <button class="btn btn-dark btn-add-to-cart">
                        <span class="add-to-cart-text">Shop now</span>
                        <img src="{{asset('main/assets/images/shop-now.svg')}}" alt="question">
                    </button>
                    <span class="product-detail-btn-like">
                                            <img src="{{ asset('main/assets/images/like.svg') }}"
                                                 class="like">
                                        </span>
                    <span class="product-detail-btn-zoom">
                                            <img src="{{ asset('main/assets/images/zoom.svg') }}"
                                                 class="zoom">
                                        </span>
                </div>
                <p class="product-categories">
                    Categories: {{ $categoryNameList }}
                </p>
                <div class="product-share">
                    <span class="share-label">Share this product</span>
                    <img src="{{ asset('main/assets/images/fb.svg') }}" alt="fb">
                    <img src="{{ asset('main/assets/images/twitter.svg') }}" alt="twitter">
                    <img src="{{ asset('main/assets/images/social.svg') }}" alt="social">
                    <img src="{{ asset('main/assets/images/youtube.svg') }}" alt="youtube">
                    <img src="{{ asset('main/assets/images/ista.svg') }}" alt="insta">
                </div>
                <div class="product-dimensions">
                    @php($productAttrs = get_meta_extra($product, 'product_attrs'))
                    @if(!empty($productAttrs))
                        @foreach($productAttrs as $attr)
                            <div class="product-composition">
                                <p>{{ data_get($attr, 'title') }}</p>
                                <div>
                                    {{ data_get($attr, 'value') }}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="product-details-list">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
    </div>
</section>
