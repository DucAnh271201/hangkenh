<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Tên thiết kế <span class="text-danger">*</span></label>
            <input id="title" type="text" class="form-control" name="title"
                   placeholder="Tên thiết kế" value="{{ $post->title ?? '' }}" autofocus required>
            <div id="title_error" class="validate-error">

            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Đường dẫn <span class="text-danger">*</span></label>
            <input type="text" id="seoSlug" class="form-control" name="slug"  value="{{ $post->slug ?? '' }}" required>

        </div>
        <div class="mb-3">
            <label for="shortDescription" class="form-label">Mô tả ngắn</label>
            <textarea id="shortDescription" class="form-control" rows="3"
                      name="meta_data[short_description]">{{ dt_get_meta($post,'short_description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tinymce-textarea" class="form-label">Mô tả</label>
            <textarea id="tinymce-textarea" name="meta_data[description]">{{ dt_get_meta($post,'description') }}</textarea>
        </div>
    </div>
</div>
@include('admin.pages.posts.yoast_seo')
