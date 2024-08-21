@extends('frontend.master')

@section('title', 'Ấn phẩm/Tạp chí')

@section('banner')
    @include('frontend.components.banner_cate', ['pageTitle' => 'Mọi điều bạn cần biết về thảm'])
@endsection

@section('content')
    <section>
        <div class="container">
            <header>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Trang chủ</li>
                        <li class="breadcrumb-item">Tạp chí điện tử</li>
                        <li class="breadcrumb-item active" aria-current="page">Mọi điều bạn cần biết về thảm</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div class="col-12">
                            <h5 class="category-font-header">Mọi điều bạn cần biết về thảm</h5>
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
                <div class="tblock-left position-relative justify-content-center">
                    <div class="tblock-information">
                        <h2 class="trending-box-title">
                            Giới thiệu
                        </h2>
                        <h2 class="trending-box-sub-title">
                            THẢM
                            LÀ GÌ?
                        </h2>
                    </div>
                    <div>
                        <p class="trending-box-description">
                            Thảm là vật dụng trang trí sàn, thường được làm từ những chất liệu dày và ấm áp.
                            Cho đến thế kỷ XIX, từ “thảm” được sử dụng khi nhắc đến những tấm phủ, có thể là dành cho cả sàn,
                            tường hay là bàn. Thế nhưng từ khi những tấm thảm được làm bằng máy xuất hiện, từ thảm gần như
                            là từ độc quyền cho các vật trang trí trên sàn. Trong đó bao gồm cả loại thảm lớn, có thể phủ toàn bộ căn phòng,
                            hay là những tấm thảm nhỏ, được sử dụng để trang trí cho một phần không gian.
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
                            Phân chia
                            theo kích thước
                        </h2>
                        <p class="introduce-description">
                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:

                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:
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
                            Phân chia
                            theo kích thước
                        </h2>
                        <p class="introduce-description">
                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:

                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row introduce" style="margin-bottom: 80px">
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Phân chia
                            theo kích thước
                        </h2>
                        <p class="introduce-description">
                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:

                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:
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
                            Phân chia
                            theo kích thước
                        </h2>
                        <p class="introduce-description">
                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:

                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row introduce" style="margin-bottom: 80px">
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Phân chia
                            theo kích thước
                        </h2>
                        <p class="introduce-description">
                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:

                            Trong tiếng Anh, người ta dùng carpets hoặc rugs để chỉ “thảm”,
                            tùy theo đặc điểm của tấm thảm đó. Vì thế, nếu bạn lựa chọn những tấm thảm có nguồn gốc từ nước ngoài thì sẽ thấy những từ này luân phiên xuất hiện, trong đó:
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-introduce" src="{{ asset('main/assets/images/introduce.png') }}"/>
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
                        <h2 class="trending-box-title">
                            Giới thiệu
                        </h2>
                        <h2 class="trending-box-sub-title">
                            CHẤT LIỆU THƯỜNG ĐƯỢC SỬ DỤNG LÀM THẢM
                        </h2>
                    </div>
                    <div>
                        <p class="trending-box-description">
                            Để đáp ứng trọn vẹn những nhu cầu đa dạng của người tiêu dùng, đã có nhiều vật liệu được đưa vào sản xuất thảm. Các bạn sẽ có rất nhiều sự lựa chọn và những chất liệu sau thực sự được yêu thích. 
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
                <h3 class="title">Thảm len</h3>
                <div class="decoration">
                    <div></div>
                </div>
            </div>
            <div class="row introduce" style="margin-bottom: 80px">
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Thảm acrylic
                        </h2>
                        <p class="introduce-description">
                            Acrylic là một loại sợi tổng hợp được làm từ acrylonitrile, một loại nhựa trong. Thảm acrylic trở nên phổ biến vào những năm 1960. Sợi, còn được gọi là "len nghệ thuật", được coi là chất thay thế len. Trong số tất cả các loại vải tổng hợp, acrylic gần giống len nhất về hình dáng và cảm giác. Nó rẻ hơn len và có một số đặc tính mong muốn.

                            Cũng như len, thảm acrylic có thể chống ẩm mốc
                            rất tốt. Chúng còn có ưu điểm là không gây dị ứng và tĩnh điện. Giá thành của thảm acrylic cũng rẻ hơn so với len, nên đang được nhiều người ưu ái chọn dùng. Tuy nhiên, nhiều người thường băn khoăn về acrylic do khả năng chống mài mòn tương đối kém. 
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
                            Thảm acrylic
                        </h2>
                        <p class="introduce-description">
                            Acrylic là một loại sợi tổng hợp được làm từ acrylonitrile, một loại nhựa trong. Thảm acrylic trở nên phổ biến vào những năm 1960. Sợi, còn được gọi là "len nghệ thuật", được coi là chất thay thế len. Trong số tất cả các loại vải tổng hợp, acrylic gần giống len nhất về hình dáng và cảm giác. Nó rẻ hơn len và có một số đặc tính mong muốn.

                            Cũng như len, thảm acrylic có thể chống ẩm mốc
                            rất tốt. Chúng còn có ưu điểm là không gây dị ứng và tĩnh điện. Giá thành của thảm acrylic cũng rẻ hơn so với len, nên đang được nhiều người ưu ái chọn dùng. Tuy nhiên, nhiều người thường băn khoăn về acrylic do khả năng chống mài mòn tương đối kém. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row introduce" style="margin-bottom: 80px">
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Thảm acrylic
                        </h2>
                        <p class="introduce-description">
                            Acrylic là một loại sợi tổng hợp được làm từ acrylonitrile, một loại nhựa trong. Thảm acrylic trở nên phổ biến vào những năm 1960. Sợi, còn được gọi là "len nghệ thuật", được coi là chất thay thế len. Trong số tất cả các loại vải tổng hợp, acrylic gần giống len nhất về hình dáng và cảm giác. Nó rẻ hơn len và có một số đặc tính mong muốn.

                            Cũng như len, thảm acrylic có thể chống ẩm mốc
                            rất tốt. Chúng còn có ưu điểm là không gây dị ứng và tĩnh điện. Giá thành của thảm acrylic cũng rẻ hơn so với len, nên đang được nhiều người ưu ái chọn dùng. Tuy nhiên, nhiều người thường băn khoăn về acrylic do khả năng chống mài mòn tương đối kém. 
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-introduce" src="{{ asset('main/assets/images/introduce.png') }}"/>
                </div>
            </div>
            <div class="row introduce">
                <div class="col-6">
                    <img class="img-introduce" src="{{ asset('main/assets/images/introduce.png') }}"/>
                </div>
                <div class="col-6 position-relative">
                    <div class="introduce-information">
                        <h2 class="introduce-title">
                            Thảm acrylic
                        </h2>
                        <p class="introduce-description">
                            Acrylic là một loại sợi tổng hợp được làm từ acrylonitrile, một loại nhựa trong. Thảm acrylic trở nên phổ biến vào những năm 1960. Sợi, còn được gọi là "len nghệ thuật", được coi là chất thay thế len. Trong số tất cả các loại vải tổng hợp, acrylic gần giống len nhất về hình dáng và cảm giác. Nó rẻ hơn len và có một số đặc tính mong muốn.

                            Cũng như len, thảm acrylic có thể chống ẩm mốc
                            rất tốt. Chúng còn có ưu điểm là không gây dị ứng và tĩnh điện. Giá thành của thảm acrylic cũng rẻ hơn so với len, nên đang được nhiều người ưu ái chọn dùng. Tuy nhiên, nhiều người thường băn khoăn về acrylic do khả năng chống mài mòn tương đối kém. 
                        </p>
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
                <h3 class="title">Những vai trò của thảm trong đời sống</h3>
            </div>
            <div class="row mt-80px">
                <div class="col-6">
                    <div class="post-big-item position-relative">
                        <img src="{{ asset('main/assets/images/knowledge-2.jpg') }}" class="object-fit-cover h-100 w-100" alt="">
                    </div>
                </div>
                <div class="col-6 d-grid">
                    <div class="d-flex align-items-center post">
                        <div class="post-content">
                            <h4 class="post-title">Tạo sự thoải mái và ấm áp</h4>
                            <p class="post-right-desc">
                                Thảm trải sàn không chỉ mang lại cảm giác mềm mại mà còn giúp bạn thấy ấm áp, thoải mái hơn, đặc biệt là vào mùa đông. Điều này thực sự cần thiết khi bạn sống trong những căn nhà hiện đại được làm từ bê tông. 
                                Sự xuất hiện của thảm sẽ che phủ những bề mặt khô cứng, lạnh buốt để cả không gian trở nên ấm cúng, dễ chịu. Sức khỏe của bạn được bảo vệ và tâm trạng của bạn sẽ thư thái hơn. 
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center post">
                        <div class="post-content">
                            <h4 class="post-title">Giảm tiếng ồn</h4>
                            <p class="post-right-desc">Một chiếc thảm chất lượng không những có khả năng cách nhiệt tốt mà còn giúp làm cho ngôi nhà của bạn yên tĩnh hơn đáng kể.
                                Tiếng ồn khi đi lại, chạy nhảy sẽ được hạn chế hết mức. Vì thế, nếu nhà bạn có trẻ con, hãy cân nhắc việc dùng thảm nhé. Bạn sẽ nhận thấy ngay sự khác biệt khi trải thảm trong nhà mình. 
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center post">
                        <div class="post-content">
                            <h4 class="post-title">Tạo điểm nhấn trong không gian nội thất</h4>
                            <p class="post-right-desc">
                                Một bí quyết tạo nét đẹp ấn tượng cho không gian mà các đơn vị trang trí nội thất thường làm là chọn các tấm thảm đặc sắc. Bằng cách sử dụng đúng phương pháp,
                                một chiếc thảm sẽ có vai trò thu hút mọi ánh nhìn. Bất kỳ ai bước chân vào nhà bạn cũng sẽ tập trung vào tấm thảm. Và bạn sẽ thể hiện được gu thẩm mỹ của mình thông qua những chiếc thảm này.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center post">
                        <div class="post-content">
                            <h4 class="post-title">Những vai trò về mặt phong thủy</h4>
                            <p class="post-right-desc">
                                Ít ai biết rằng thảm cũng có thể đóng góp vào yếu tố phong thủy trong không gian.
                                Chúng hoạt động như một vật làm chậm dòng chảy năng lượng, thường giữ lại những dòng khí tốt đẹp cho phong thủy gia đình. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
