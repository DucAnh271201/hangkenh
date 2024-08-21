<form action="{{ route('admin.api.options') }}" class="optionSave" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Tiêu
            đề</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="page_title" value="{{ get_option('page_title') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Địa chỉ trang
            web</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="web_address" value="{{ get_option('web_address') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Địa chỉ email
            quản trị</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="email" value="{{ get_option('email') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Số điện thoại</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="phone_number" value="{{ get_option('phone_number') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Favorite icon</label>
        <div class="col-12 col-md-9">
           <x-forms.image-box id="favorite_icon" name="favorite_icon" :image="get_option('favorite_icon')"/>
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Logo</label>
        <div class="col-12 col-md-9">
            <x-forms.image-box id="logo" name="logo" :image="get_option('logo')"/>
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Logo Footer</label>
        <div class="col-12 col-md-9">
            <x-forms.image-box id="logo_footer" name="logo_footer" :image="get_option('logo_footer')"/>
        </div>
    </div>

    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Trang chủ</label>
        <div class="col-12 col-md-9">
            <select name="page_on_front"  class="form-control">
                <option value="">Mặc định</option>
                @foreach(get_pages() as $page)
                    <option value="{{$page->id}}" {{ get_option('page_on_front') == $page->id ? 'selected' : '' }}>{{ $page->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Footer</label>
        <div class="col-12 col-md-9">
            <textarea class="form-control" rows="20" name="footer">{{ get_option('footer') }}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-5">Lưu</button>
</form>
