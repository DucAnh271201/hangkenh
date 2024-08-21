<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Tên ngắn sản phẩm <span class="text-danger">*</span></label>
            <input  type="text" class="form-control" name="meta_data[short_title]"
                   placeholder="Tên sản phẩm ngắn" value="{{ dt_get_meta($post, 'short_title') }}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
            <input id="title" type="text" class="form-control" name="title"
                   placeholder="Tên sản phẩm" value="{{ dt_get($post, 'title') }}" required>
            <div id="title_error" class="validate-error">

            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Đường dẫn</label>
            <input type="text" id="seoSlug" class="form-control" name="slug" value="{{ $post->slug ?? '' }}">
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

        <div class="mb-3">
            <label for="title" class="form-label">Video(url)</label>
            <input type="text"  class="form-control" name="meta_data[product_video]" value="{{ dt_get_meta($post,'product_video') }}">
        </div>
    </div>
</div>
@include('admin.pages.products.attribute')

<div class="mt-3">
    @include("admin.pages.$view.tabs")
</div>
@include('admin.pages.products.config_banner')
@include('admin.pages.posts.yoast_seo')
