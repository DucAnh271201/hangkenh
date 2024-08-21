<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Tên ngắn nhà thiết kế</label>
            <input type="text" class="form-control" name="short_name"
                   placeholder="Tên ngắn nhà thiết kế" value="{{ $designer->short_name ?? '' }}" autofocus required>
            <div id="short_name_error" class="validate-error">

            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tên nhà thiết kế <span class="text-danger">*</span></label>
            <input id="title" type="text" class="form-control" name="name"
                   placeholder="Tên nhà thiết kế" value="{{ $designer->name ?? '' }}" required>
            <div id="name_error" class="validate-error">

            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Đường dẫn <span class="text-danger">*</span></label>
            <input type="text" id="seoSlug" class="form-control" name="slug" value="{{ $designer->slug ?? '' }}" required>

        </div>
        <div class="mb-3">
            <label for="shortDescription" class="form-label">Mô tả ngắn</label>
            <textarea id="shortDescription" class="form-control" rows="3"
                      name="short_description">{{ $designer->short_description ?? '' }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tinymce-textarea" class="form-label">Mô tả</label>
            <textarea id="tinymce-textarea" name="description">{{ $designer->description ?? '' }}</textarea>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Facebook</label>
            <input type="text" class="form-control" name="meta_data[facebook]"
                   placeholder="Link facebook" value="{{ $designer->meta_data['facebook'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Twitter</label>
            <input type="text" class="form-control" name="meta_data[twitter]"
                   placeholder="Link twitter" value="{{ $designer->meta_data['twitter'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Instagram</label>
            <input type="text" class="form-control" name="meta_data[instagram]"
                   placeholder="Link instagram" value="{{ $designer->meta_data['instagram'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Youtube</label>
            <input type="text" class="form-control" name="meta_data[youtube]"
                   placeholder="Link youtube" value="{{ $designer->meta_data['youtube'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tiktok</label>
            <input type="text" class="form-control" name="meta_data[tiktok]"
                   placeholder="Link tiktok" value="{{ $designer->meta_data['tiktok'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Linkedin</label>
            <input type="text" class="form-control" name="meta_data[linkedin]"
                   placeholder="Link tiktok" value="{{ $designer->meta_data['linkedin'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Pinterest</label>
            <input type="text" class="form-control" name="meta_data[pinterest]"
                   placeholder="Link tiktok" value="{{ $designer->meta_data['pinterest'] ?? '' }}">
        </div>
    </div>
</div>
@include('admin.pages.posts.yoast_seo')
