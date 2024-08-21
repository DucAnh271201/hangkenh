<div class="row">
    <div class="col-md-9 col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Tên trang</label>
                    <input id="title" type="text" class="form-control" name="title"
                           placeholder="Tên trang" value="{{ $post->title ?? '' }}" required>
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
                    <textarea id="tinymce-textarea"
                              name="meta_data[description]">{{ dt_get_meta($post,'description') }}</textarea>
                </div>
            </div>
        </div>
        @include('admin.pages.posts.yoast_seo')

    </div>
    <div class="col-md-3 col-12">
        <div class="sticky-top position-sticky">
            <div class="accordion bg-white mb-3 mt-3 mt-md-0">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#action-1" aria-expanded="true">
                            Đăng
                        </button>
                    </h2>
                    <div id="action-1" class="accordion-collapse collapse show"
                         data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                            <div class="form-group mb-3">
                                <label class="form-label">Trạng thái</label>
                                <select name="status" class="form-control" id="">
                                    @foreach($statuses as $status => $label)
                                        <option
                                            value="{{ $status }}" {{ !empty($post) && $status == $post->status ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right">Đăng
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion bg-white mb-3">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#category" aria-expanded="true">
                            Ảnh đại diện
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse show"
                         data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                            @php($featureImageId = get_media($post, 'feature_image', 'id'))
                            @php($featureImageImage = get_media($post, 'feature_image', 'image'))
                            <div id="feature_image"
                                 class="image-post-box d-flex align-items-center justify-content-center open-media-modal"
                                 data-multiple="false"
                                 data-refer-id="#feature_image"
                                 data-input-name="meta_data[feature_image]"
                                 data-image-ids="{{ $featureImageId }}"
                            >
                                @if(!empty($featureImageId))
                                    <input type="hidden" name="meta_data[feature_image][0][id]"
                                           value="{{ $featureImageId }}">
                                    <input type="hidden" name="meta_data[feature_image][0][image]"
                                           value="{{ $featureImageImage }}">
                                    <img
                                        src="{{ $featureImageImage }}"
                                        class="w-100 h-100 object-cover">
                                @endif

                                <div
                                    class="icon d-flex align-items-center justify-content-center {{ $featureImageImage ? 'd-none' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" stroke-width="1"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 5l0 14"/>
                                        <path d="M5 12l14 0"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion bg-white mb-3">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#tag" aria-expanded="true">
                            Từ khóa
                        </button>
                    </h2>
                    <div id="tag" class="accordion-collapse collapse show">
                        <div class="accordion-body pt-0">
                            <div class="form-group mb-3">
                                <select class="form-select"
                                        name="tags[]"
                                        id="tags-selects"
                                        data-placeholder="Nhập từ khóa" multiple>
                                    @if(!empty($post))
                                        @foreach($post->tags as $tag)
                                            <option value="{{ $tag->title }}" selected>{{ $tag->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-media-modal/>
