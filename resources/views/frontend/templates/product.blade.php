@extends('frontend.master')
@section('title', $product->seo?->title)
@section('description', $product->seo?->description)
@section('keywords', $product->seo?->keywords)
@section('image', $product?->feature_image_link)
@section('title', 'Trang chủ')
@push('json')
    {!! $jsonLdScript !!}
@endpush
@section('banner')
    @php($productBanner = get_meta_extra($product,'banner_image'))
    @include('frontend.components.banner_cate', ['pageTitle' => dt_get_meta($product, 'banner_title') , 'image' => get_data_first_arr($productBanner,'image')])
@endsection
@section('content')
    <section class="product-detail">
        <div class="container">
            <header class="pc">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                        @if(!empty($breadcrumbs))
                            @foreach($breadcrumbs as $breadcrumb)
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="{{ get_permalink($breadcrumb) }}"> {{ $breadcrumb->title }}</a></li>
                            @endforeach
                        @endif
                    </ol>
                </nav>
            </header>
            @if(!is_mobile())
                @include('frontend.components.product_detail.product_detail_pc')
            @else
                @include('frontend.components.product_detail.product_detail_mobile')
            @endif

            <div class="trending-box">
                <div class="tblock-left position-relative">
                    <article class="tblock-information d-flex flex-column justify-content-end">
                        <p class="tblock-description">
                            Có nhiều cách để làm một tấm thảm bằng tay và nhiều chất liệu để bạn lựa chọn. Các
                            loại sợi
                            khác nhau thể hiện các đặc tính khác nhau về độ bền, độ mềm và độ bóng. Một số loại
                            mịn và
                            mát khi chạm vào trong khi một số khác lại mềm mại và ấm áp một cách xa hoa.
                            Ngoài sự quyến rũ rõ ràng hơn của len, lụa và bông, chúng tôi đã khám phá những ưu
                            điểm của
                            các loại sợi đa dạng như tre, lá chuối,
                            mohair, merino và alpaca.
                        </p>
                    </article>
                    <div>
                        <p class="date">
                            Tháng 10 năm 1997
                        </p>
                        <p class="author">
                            VŨ SƠN DIRECTOR
                        </p>
                    </div>
                </div>
                <div class="tblock-right">
                    <img src="{{ asset('main/assets/images/product-author.png') }}"/>
                    <div class="img-desc">
                        <h2>Thảm len hàng kênh</h2>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.components.product_detail.related')
    </section>

@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.bg-element-filter-image', function (e) {
                e.preventDefault()

                $('.bg-element-filter-image').removeClass('selected')

                $(this).toggleClass('selected')

            })
        })
    </script>
@endpush
