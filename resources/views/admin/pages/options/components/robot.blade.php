<form action="{{ route('admin.api.options') }}" class="optionSave" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="action" value="robot">
    <div class="form-group d-flex align-items-center row mb-3 ">
        <div class="col-12 col-md-12">
            <textarea class="form-control" rows="20" name="content">{{ File::get(public_path('robots.txt')) }}</textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-5">Lưu</button>
</form>
