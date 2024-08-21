<form action="{{ route('admin.api.options') }}" class="optionSave" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Máy chủ email</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="email_host" value="{{ get_option('email_host') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Tên đăng nhập</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="email_username" value="{{ get_option('email_username') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Mật khẩu</label>
        <div class="col-12 col-md-9">
            <input type="password" class="form-control" name="email_password" value="{{ get_option('email_password') }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-5">Lưu</button>
</form>
