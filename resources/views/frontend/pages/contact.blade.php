@extends('frontend.master')

@section('title', 'Liên hệ')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Liên hệ'])
@endsection

@section('content')
    <section class="contact">
        <div class="container">
            <div class="row">
                <main class="col-md-12">
                    <header>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"> Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                            </ol>
                        </nav>
                    </header>
                    <div class="row contact-inner">
                        <div class="col-6">
                            <div>
                                <h3 class="contact-title">LIÊN HỆ</h3>
                                <div class="contact-address">
                                    <div class="contact-address-company">
                                        <p class="contact-address-main">Công ty tnhh mtv hàng kênh</p>
                                        <p>Phone: 024 8889 1858</p>
                                        <p>Email: info@hangkenh.com</p>
                                        <p>Thời gian làm việc: 08:00 - 22:00 | Các ngày trong tuần (Trừ ngày lễ)</p>
                                    </div>
                                    <div class="contact-address-address">
                                        <div>
                                            <p class="contact-address-main">HÀ NỘI</p>
                                            <p>Căn số 21 Khu Sunrise A - The Manor Central Park –  Nguyễn Xiển - Hà Nội</p>
                                        </div>
                                        <div>
                                            <p class="contact-address-main">Tp. Hồ chí minh</p>
                                            <p>Số 76 Đường 10A – Phường An Khánh – TP. Thủ Đức - Tp.Hồ Chí Minh</p>
                                        </div>
                                        <div>
                                            <p class="contact-address-main">Hải Phòng</p>
                                            <p>Đội 7 – Xã An Thọ - Huyện An Lão - Tp. Hải Phòng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contract-form">
                                    <span></span>
                                    <h4 class="contract-form-title">Gửi thắc mắc cho chúng tôi</h4>
                                    <div>
                                        <form action="#" method="post">
                                            <input type="text" name="name" class="form-control" placeholder="Tên của bạn">
                                            <input type="text" name="email" class="form-control" placeholder="Email của bạn">
                                            <input type="text" name="phone" class="form-control" placeholder="Số điện thoại của bạn">
                                            <textarea placeholder="Nội dung" name="content" class="form-control"></textarea>
                                            <button class="btn btn-send-contact">
                                                Gửi cho chúng tôi
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                                    <path d="M0 10H21.8207M21.8207 10C21.8207 10 17.6144 8.84615 15.0906 6.15385C12.5668 3.46154 12.5668 0 12.5668 0M21.8207 10C21.8207 10 17.6541 11.1538 15.1541 13.8462C12.6541 16.5385 12.6541 20 12.6541 20" stroke="white" stroke-width="2.2" stroke-linejoin="bevel"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4688255105284!2d105.80673874992924!3d20.97383603996863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad886cd5d413%3A0x1344010521f2146d!2zVGjhuqNtIGxlbiBIw6BuZyBLw6puaA!5e0!3m2!1svi!2s!4v1712428683565!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection
