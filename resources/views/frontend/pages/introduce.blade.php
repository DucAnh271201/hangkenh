@extends('frontend.master')

@section('title', 'Giới Thiệu')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Giới Thiệu'])
@endsection

@section('content')
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet"/>
    <section class="introduce">
        <div class="container">
            <div class="row">
                <main class="col-md-12">
                    <header class="mb-48px">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="/"> Tạp chí điện tử</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-font-header">Giới thiệu</h2>
                            </div>
                        </div>
                    </header>
                    <div class="history">
                        <div class="history-begin">
                            <div class="history-begin-image">
                                <img src="{{ asset('main/assets/images/introduce-1.png') }}"
                                     alt="hàng kênh NHỮNG NĂM 2014">
                                <h3>hàng kênh NHỮNG NĂM 2014</h3>
                            </div>
                            <div class="history-begin-content">
                                <p>
                                    HANG KENH được thành lập năm 2014 bắt đầu từ một xưởng sản xuất nhỏ và nhanh chóng
                                    trở thành một thương hiệu mạnh trong ngành
                                </p>
                                <p>
                                    Được thành lập bởi 3 anh em Vũ Sơn – Vũ Tiến và Dung Nguyễn với nền tảng từ sự đam
                                    mê về những sản phẩm thảm dệt tay đầy cảm hứng. Với quy mô sản xuất nhỏ lẻ, trong 10
                                    năm xây dựng và phát triển, Thảm len HANG KENH ngày càng khẳng định được thương hiệu
                                    của mình về một công ty chuyên dệt những tấm thảm cao cấp cho giới thượng lưu Việt
                                    Nam cũng như những công trình đẳng cấp.
                                </p>
                            </div>
                        </div>
                        <div class="history-video">
                            <video id="content_video" class="video-js vjs-default-skin"
                                   controls preload="auto" poster="{{asset('main/assets/images/introduce-video.png')}}">
                                <source src="https://www.youtube.com/watch?v=BwkXhvkEqS8"
                                        type="video/youtube"/>
                            </video>
                        </div>
                        <div class="history-manufacture">
                            <div class="history-manufacture-content">
                                <h3>Nâng tầm thương hiệu thảm Việt</h3>
                                <p>Chúng tôi thiết kế, sáng tạo những bộ sưu tập thảm trải sàn khác nhau với nhiều công
                                    nghệ sản xuất như: Hand-tuting, HandKnots. Tất cả đều được thực hiện thiết kế bởi
                                    những nghệ sĩ tài hoa, những người có nhiều năm kinh nghiệm trong ngành thiết kế,
                                    thời trang, sắp đặt nội thất. HANG KENH có tất cả giải pháp cho mọi nhu cầu về không
                                    gian và thời gian của sự sáng tạo.
                                </p>
                            </div>
                            <div class="history-manufacture-image">
                                <img src="{{asset('main/assets/images/introduce-2.png')}}" alt="Khâu sản xuất">
                                <h3>Khâu sản xuất</h3>
                            </div>
                        </div>
                    </div>
                    <div class="intro">
                        <div class="section-box">
                            <div class="decoration d-flex justify-content-center align-center">
                                <div></div>
                            </div>
                            <div class="title">
                                <h2>Tôn chỉ phát triển</h2>
                            </div>
                            <div class="sub-title">
                                <h2>Tôn chỉ phát triển</h2>
                            </div>
                        </div>
                        <div class="row intro-inner mt-80px">
                            <div class="col-6 intro-content">
                                <div class="intro-content-item">
                                    <h4>Chất lượng</h4>
                                    <p>Một điểm mạnh và lòng cốt của HANGKENH là luôn nâng cao chất lượng trên mỗi sản
                                        phẩm thảm được sản xuất. Chúng tôi cam kết mỗi m2 thảm khách hàng đang sở hữu
                                        được sản xuất với chất lượng tuyệt vời nhất, hoàn mỹ nhất.</p>
                                </div>
                                <div class="intro-content-item">
                                    <h4>Thiết kế</h4>
                                    <p>HANGKENH nỗ lực mang đến những trải nghiệm về xu hướng thiết kế mới nhất từ: 
                                        hình dáng, màu sắc, phong cách và sự cảm nhận “chạm” của vật liệu.</p>
                                </div>
                                <div class="intro-content-item">
                                    <h4>Thời gian</h4>
                                    <p>Cam kết của HANG KENH và khách hàng được thực hiện ngay lần đầu tiên tiếp xúc. Là
                                        một thương hiệu “hướng tới khách hàng”, không một chi tiết nào được bỏ xót ngẫu
                                        nhiên, các dịch vụ được cá nhân hóa và luôn luôn linh hoạt</p>
                                </div>
                                <div class="intro-content-item">
                                    <h4>Sự tính tế</h4>
                                    <p>Đội ngũ thiết kế và sản xuất của HANG KENH không chỉ tập chung trong việc đáp ứng
                                        nhu cầu và còn vượt trên sự mong đợi của khách hàng. Cung cấp những sản phấm
                                        thảm chất lượng cao cấp nhất kết hợp với dịch vụ cao cấp nhất trong thiết kế và
                                        chăm sóc thảm là một nguyên tắc của chúng tôi.</p>
                                </div>
                                <div class="intro-content-item">
                                    <h4>Sự đổi mới</h4>
                                    <p>Nắm vững và không ngừng cải tiến kỹ thuật sản xuất và cập nhật những nguyên liệu
                                        mới nhằm đem lại những cảm xúc mới của khách hàng với những sản phẩm thảm trải
                                        sàn cao cấp của HANG KENH</p>
                                </div>
                            </div>
                            <div class="col-6 intro-image">
                                <img src="{{asset('main/assets/images/introduce-3.png')}}"
                                     alt="hàng kênh NHỮNG NĂM 2014">
                            </div>
                        </div>
                    </div>
                    <div class="intro intro-content-right">
                        <div class="section-box">
                            <div class="decoration d-flex justify-content-center align-center">
                                <div></div>
                            </div>
                            <div class="title">
                                <h2>Giới thiệu</h2>
                            </div>
                            <div class="sub-title">
                                <h2>Chính sách, chất lượng, cam kết</h2>
                            </div>
                        </div>
                        <div class="row intro-inner mt-80px">
                            <div class="col-6 development-image">
                                <img src="{{asset('main/assets/images/introduce-4.png')}}"
                                     alt="hàng kênh NHỮNG NĂM 2014">
                            </div>
                            <div class="col-6 intro-content">
                                <div class="intro-content-item">
                                    <h4>Tầm nhìn</h4>
                                    <p>Được công nhận là một công ty tiên phong, với những sản phẩm được lấy làm sản
                                        phẩm tham chiếu trong ngành thảm trải sàn tại Việt Nam. HANG KENH hướng tới là
                                        một doanh nghiệp bền vững, đổi mới, tập chung vào cung cấp những giải pháp về
                                        sàn cao cấp và dịch vụ khách hàng suất sắc.</p>
                                </div>
                                <div class="intro-content-item">
                                    <h4>nhiệm vụ</h4>
                                    <p>HANG KENH tôn chỉ phát triển sản xuất những dòng thảm trải sàn cao cấp nhất cho
                                        mọi không gian từ tư nhân, công trình khách sạn cũng như nhiều công trình trọng
                                        điểm của tổ chức chính phủ.</p>
                                    <p>Những công trình thảm trải sàn luôn vượt qua và vượt quá sự mong đợi của khách
                                        hàng.</p>
                                </div>
                                <div class="intro-content-item">
                                    <h4>giá trị</h4>
                                    <p>Sự hài lòng của khách hàng và nhu cầu của thị trường với những sản phẩm thảm trải
                                        sàn chất lượng cao.</p>
                                    <p>Sự tham gia của nhân viên, nhà cung cấp vật liệu và hệ thống kiểm tra môi trường
                                        khu sản xuất giúp HANG KENH đạt được nhiều tiêu chuẩn xuất sắc về Vật liệu an
                                        toàn, quy trình sản xuất an toàn, thân thiện với người lao động,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="conclusion">
                        <span class="head-title-underline"></span>
                        <div class="conclusion-inner">
                            <img src="{{asset('main/assets/images/“.svg')}}" alt="hàng kênh NHỮNG NĂM 2014">
                            <p>HANG KENH ngày nay chính là đại diện cho một thương hiệu thảm cao cấp, hiện thực của sự
                                kết hợp truyền thống trong sản xuất và hiện đại trong sáng tạo, thiết kế</p>
                            <div class="conclusion-image">
                                <img src="{{asset('main/assets/images/introduce-5.png')}}"
                                     alt="hàng kênh NHỮNG NĂM 2014">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <script src="{{ asset('main/assets/js/Youtube.min.js') }}"></script>
    <script>
        var player = videojs('content_video', {
            autoplay: false
        });
    </script>
@endsection
