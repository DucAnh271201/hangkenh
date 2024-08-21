<form action="{{ route('admin.api.options') }}" class="optionSave" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Facebook</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="social_facebook" value="{{ get_option('social_facebook') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Twitter</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="social_twitter" value="{{ get_option('social_twitter') }}">
        </div>
    </div>
    <div class="form-group d-flex align-items-center row mb-3 ">
        <label for="" class="text-nowrap fw-bold col-12 col-md-2">Instagram</label>
        <div class="col-12 col-md-9">
            <input type="text" class="form-control" name="social_instagram" value="{{ get_option('social_instagram') }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-5">Lưu</button>
</form>
