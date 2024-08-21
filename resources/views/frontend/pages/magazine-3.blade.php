@extends('frontend.master')

@section('title', 'Ấn phẩm/Tạp chí')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Dệt nên hạnh phúc'])
@endsection

@section('content')
    <section>
        <div class="container">
            <header>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item">Tạp chí điện tử</li>
                        <li class="breadcrumb-item active" aria-current="page">Dệt nên hạnh phúc</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div class="col-12">
                            <h5 class="category-font-header">Dệt nên hạnh phúc</h5>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="trending-box box-top">
                <div class="tblock-right">
                    <img src="{{ asset('main/assets/images/banner-111.png')}}"
                         alt="Ảnh 2">
                    <div class="img-desc bottom-0" style="top: auto">
                        <h2>Thảm là gì ?</h2>
                    </div>
                </div>
                <div class="tblock-left position-relative">
                    <div class="tblock-information">
                        <h2 class="trending-box-title">
                            Giới thiệu
                        </h2>
                        <h2 class="trending-box-sub-title">
                            Dệt nên hạnh phúc
                        </h2>
                    </div>
                    <div>
                        <p class="trending-box-description">
                            Sau hơn 1 thập kỷ không ngừng cố gắng, Thảm Len Hàng Kênh đã gặt hái được những “quả ngọt”
                            xứng đáng. Đó là những nỗ lực đem tới không gian sống trọn vẹn,
                            đong đầy hạnh phúc cho mỗi gia đình đồng thời tiếp nối sự vẹn nguyên về giá trị thẩm mỹ lẫn chất lượng của những tấm thảm Hàng Kênh chính gốc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-box">
                <div class="sub-title">
                    Giới thiệu
                </div>
                <h3 class="title">Cách phân loại thảm</h3>
                <div class="decoration">
                    <div></div>
                </div>
            </div>
            <div class="row introduce" style="margin-bottom: 80px">
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Từng là thương hiệu nổi tiếng, được ưa chuộng tại
                            Châu Âu và Trung Quốc
                        </h2>
                        <p class="introduce-description">
                            Nghề dệt thảm len bắt đầu xuất hiện ở Hàng Kênh – Hải Phòng vào những năm 30 của thế kỷ XX. Lúc bấy giờ những tấm thảm Hàng Kênh được xuất khẩu sang thị trường châu Âu và Trung Quốc, và nhận được sự đón nhận nhiệt tình của giới quý tộc xa xỉ. Sản lượng mỗi năm có thể lên đến 1000m2, biến thảm len Hàng Kênh trở thành một thương hiệu nổi tiếng
                            Tuy nhiên đến năm 1944, nghề làm thảm len tại Hàng Kênh rơi vào đình trệ do nhiều biến động lớn của lịch sử đất nước. Chỉ đến năm 1959, nghề dệt thảm len ở Hàng Kênh mới có những dấu hiệu nhen nhóm hoạt động. Thế nhưng vào thời điểm này, chỉ có một vài cơ sở hoạt động rời rạc, nhằm phục vụ cho nhu cầu của thị trường Liên Xô là chủ yếu.  
                            Do không có đường lối hoạt động phù hợp, Thảm Len Hàng Kênh hoạt động không khởi sắc. Những tấm thảm của thương hiệu Thảm Len Hàng Kênh chưa được biết đến rộng rãi..
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-introduce" src="{{ asset('main/assets/images/introduce.png') }}"/>
                </div>
            </div>
            <div class="row introduce" style="margin-bottom: 80px">
                <div class="col-6">
                    <img class="img-introduce" src="{{ asset('main/assets/images/introduce.png') }}"/>
                </div>
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Nỗ lực vực dậy một
                            thương hiệu truyền thống xưa
                        </h2>
                        <p class="introduce-description">
                            Dù chưa định hình rõ phải làm thế nào, nhưng ông cùng những người bạn của mình đã rất sẵn sàng cho
                            một cuộc chiến khó khăn, nhất là đối với một doanh nghiệp chỉ vừa thành lập dựa trên một xưởng sản xuất nhỏ tại Hàng Kênh, Hải Phòng.
                            Cũng rất may rằng trong những năm bắt đầu xây dựng thương hiệu, ông cùng bạn bè mình đã gặp được nhiều điều may mắn và thuận lợi nhất định.
                            Đó là nhờ từ khoảng năm 2016, người dân Việt Nam bắt đầu quan tâm nhiều hơn về chất lượng cuộc sống.
                            Các gia đình mong muốn sở hữu một không gian sống tốt hơn, đẹp hơn, không chỉ để cả nhà luôn thấy thoải mái, mà còn để thể hiện được gu thẩm mỹ, cá tính của bản thân.
                        </p>
                    </div>
                </div>
            </div>
            <div class="trending-box box-top">
                <div class="tblock-right">
                    <img src="{{ asset('main/assets/images/banner-111.png')}}"
                         alt="Ảnh 2">
                    <div class="img-desc bottom-0" style="top: auto">
                        <h2>Chất liệu</h2>
                    </div>
                </div>
                <div class="tblock-left position-relative">
                    <div class="tblock-information">
                        <p class="trending-box-description">
                            Định hướng của Thảm Len Hàng Kênh bắt đầu rõ ràng.
                            Cả đội ngũ nhân sự đã có những sự chuẩn bị kỹ lưỡng nhất cho hành trình chinh phục thị trường.
                            Nhờ có sự đầu tư nghiêm túc vào thiết kế và các nghiên cứu tỉ mỉ về chất liệu, sản phẩm thảm len dệt tay mà Thảm len Hàng Kênh đã có nền tảng vững mạnh, sẵn sàng cho hành trình lâu dài của mình
                        </p>
                    </div>
                    <div>
                        <div class="date">Tháng 10 năm 1997</div>
                        <div class="author">NTK VŨ SƠN</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-basic ps-6">
        <div class="container py-100px">
            <div class="section-box">
                <div class="sub-title">
                    ỨNG DỤNG THỰC TẾ
                </div>
                <h3 class="title">Hành trình dệt hạnh phúc,
                    đan phong cách</h3>
            </div>
            <div class="row mt-80px">
                <div class="col-6">
                    <div class="post-big-item position-relative">
                        <img src="{{ asset('main/assets/images/knowledge-3.jpg') }}" class="object-fit-cover h-100 w-100" alt="">
                    </div>
                </div>
                <div class="col-6 d-grid">
                    <div class="d-flex align-items-end post">
                        <div class="post-content">
                            <p class="post-right-desc">
                                Tạo sự thoải mái và ấm áp
                                Cùng với một nền tảng chắc chắn và các chuyên gia, đồng thời có thêm nhiều am hiểu về lịch sự phát triển của ngành dệt thảm len, Thảm Len Hàng Kênh hiểu rằng giá trị của các sản phẩm không chỉ ở vẻ đẹp của nó mà còn nằm ở chất lượng và tác dụng.
                                Mỗi sản phẩm không chỉ sở hữu phong cách riêng, mà còn chứa đựng những câu chuyện cùng giá trị riêng. Một thiết kế mới được sáng tạo là cả một hành trình. Những câu chuyện được lắng đọng lại trong từng đường nét dệt trên tấm thảm. Bàn tay của người thiết kế cùng nghệ nhân gia công đã truyền cảm hứng, tạo dựng tinh hoa cho từng sản phẩm.
                                Cùng với sự dốc sức trong cải tiến các công nghệ và đầu tư vào đội ngũ thợ dệt nhiều kinh nghiệm, Thảm Len Hàng Kênh đã làm nên các sản phẩm thảm được nhận huy chương vàng chất lượng trong nước lẫn quốc tế. Không những vậy sản phẩm còn đạt được sự tán dương và công nhận từ người sử dụng.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="quote">
                <svg xmlns="http://www.w3.org/2000/svg" width="74" height="64" viewBox="0 0 74 64" fill="none">
                    <path d="M18.1305 64C12.6073 64 8.18871 62.0247 4.87479 58.0741C1.71868 53.9654 0.140625 48.6716 0.140625 42.1926C0.140625 33.3432 2.50771 25.363 7.24187 18.2518C12.1338 10.9827 19.5507 4.89876 29.4925 0L32.0962 3.79259C27.3621 6.63703 23.0224 10.6667 19.0773 15.8815C15.29 20.9383 13.3963 26.0741 13.3963 31.2889C13.3963 32.7111 13.7908 33.8963 14.5798 34.8444C15.3689 35.6346 16.5524 36.0296 18.1305 36.0296C22.0756 36.0296 25.3895 37.4519 28.0722 40.2963C30.9127 42.9827 32.333 46.3012 32.333 50.2519C32.333 54.2025 30.9127 57.521 28.0722 60.2074C25.3895 62.7358 22.0756 64 18.1305 64ZM59.081 64C53.5578 64 49.1392 62.0247 45.8253 58.0741C42.6692 53.9654 41.0912 48.6716 41.0912 42.1926C41.0912 33.3432 43.4582 25.363 48.1924 18.2518C53.0844 10.9827 60.5012 4.89876 70.443 0L73.0468 3.79259C68.3126 6.63703 63.973 10.6667 60.0278 15.8815C56.2405 20.9383 54.3468 26.0741 54.3468 31.2889C54.3468 32.7111 54.7413 33.8963 55.5304 34.8444C56.3194 35.6346 57.5029 36.0296 59.081 36.0296C63.0261 36.0296 66.34 37.4519 69.0227 40.2963C71.8632 42.9827 73.2835 46.3012 73.2835 50.2519C73.2835 54.2025 71.8632 57.521 69.0227 60.2074C66.34 62.7358 63.0261 64 59.081 64Z" fill="#919296"/>
                </svg>
                <div class="quote-content">
                    Những thành tựu khả quan là một dấu hiệu tuyệt vời chứng minh sự phục hưng của thương hiệu thảm len dệt tay Hàng Kênh. Trải qua hàng loạt cải tiến không ngừng và chắt lọc những tinh hoa truyền thống, các sản phẩm thảm len dệt tay của Thảm Len Hàng Kênh nay đã mở ra một xu hướng mới, lan tỏa khắp thế giới, tới từng ngôi nhà, song hành cùng mỗi gia đình.
                </div>
            </div>
        </div>
    </section>
    <section class="bg-basic">
        <div class="container py-100px">
            <div class="section-box">
                <div class="sub-title">
                    ỨNG DỤNG THỰC TẾ
                </div>
                <h3 class="title">
                    hành trình của Thảm Len Hàng Kênh
                    vẫn đang tiếp tục.
                </h3>
            </div>
            <div class="trending-box box-top mt-30px">
                <div class="tblock-left position-relative">
                    <div class="tblock-information">
                        <p class="trending-box-description">
                            Dẫu vậy, hành trình của Thảm Len Hàng Kênh vẫn chưa tiếp tục.
                            Sự thăng hoa rực rỡ của sản phẩm và thương hiệu sẽ không ngừng đưa tới những
                            tấm thảm tuyệt vời nhất, phục vụ người tiêu dùng trong nước lẫn quốc tế.
                        </p>
                    </div>
                    <div>
                        <div class="date">Tháng 10 năm 1997</div>
                        <div class="author">THẢM LEN HÀNG KÊNH</div>
                    </div>
                </div>
                <div class="tblock-right">
                    <img src="{{ asset('main/assets/images/banner-111.png')}}"
                         alt="Ảnh 2">
                    <div class="img-desc bottom-0" style="top: auto">
                        <h2>Channels Copper</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
