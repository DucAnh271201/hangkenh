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
                <div class="form-group mb-3">
                    <label class="form-label">Tác giả</label>
                    <input type="text" class="form-control" name="meta_data[post_author_name]" value="{{  !empty($post) && $post->post_author_name ? $post->post_author_name : '' }}">
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
                Ảnh sản phẩm
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
                        <input type="hidden" name="meta_data[feature_image][0][id]" value="{{ $featureImageId }}">
                        <input type="hidden" name="meta_data[feature_image][0][image]" value="{{ $featureImageImage }}">
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
                    data-bs-target="#category" aria-expanded="true">
                Thư viện sản phẩm
            </button>
        </h2>
        <div class="accordion-collapse collapse show"
             data-bs-parent="#accordion-example">
            <div class="accordion-body pt-0">
                <div class="image-box-libs">
                    <div id="image_library"
                         data-image-ids="{{ !empty($post) && $post->image_library_ids ? $post->image_library_ids : '' }}"
                         class="
                    image-libs d-grid gap-2 align-items-center
                    {{ isset($post->image_library) && count($post->image_library) > 1 ? 'grid-template-columns-2' : '' }}
                    ">
                        @if(isset($post->image_library))
                            @foreach($post->image_library as $key=> $item)
                                <input type="hidden" name="meta_data[image_library][{{$key}}][id]" value="{{ $item['id'] }}">
                                <input type="hidden" name="meta_data[image_library][{{$key}}][image]" value="{{ $item['image'] }}">
                                <img
                                    src="{{ $item['image'] }}"
                                    class="w-100 h-100 object-cover"
                                    alt="{{ $item->title ?? '' }}" style=" height: 120px !important;">
                            @endforeach
                        @endif

                        <div class="image-post-box d-flex align-items-center justify-content-center open-media-modal"
                             data-multiple="true" data-refer-id="#image_library" data-input-name="meta_data[image_library]">
                            <div
                                class="icon d-flex align-items-center justify-content-center">
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
    </div>
</div>
<div class="accordion bg-white mb-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                    data-bs-target="#category" aria-expanded="true">
                Danh mục sản phẩm
            </button>
        </h2>
        <div id="category" class="accordion-collapse collapse show"
             data-bs-parent="#accordion-example">
            <div class="accordion-body pt-0">
                <div class="form-group">
                    <select class="form-select"
                            id="category-ids-selects"
                            name="category_ids[]"
                            data-placeholder="Chọn danh mục" multiple
                            autocomplete="off"
                    >
                    </select>
                    <div id="category_ids_error" class="validate-error">

                    </div>
                    <a href="javascript:void(0)" id="add_category"
                       class="mt-2 mb-2 d-block d-flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="icon icon-tabler icon-tabler-plus" width="10"
                             height="10" viewBox="0 0 26 26" stroke-width="1"
                             stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 5l0 14"/>
                            <path d="M5 12l14 0"/>
                        </svg>
                        <span> Thêm danh mục</span>
                    </a>
                    <div class="category-add mt-2 d-none">
                        <div class="form-group mb-2">
                            <label for="category_title" class="form-label">Tiêu
                                đề</label>
                            <input id="category_title" type="text"
                                   class="form-control" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group mb-2">
                            <label for="category_parent_id" class="form-label">Danh mục
                                cha</label>
                            <select id="category_parent_id"
                                    class="form-control">
                                <option value="">Chọn danh mục cha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" id="save_category"
                                    data-action="{{ route('admin.api.categories.store') }}"
                                    class="btn btn-primary">Lưu
                            </button>
                        </div>
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
                            data-placeholder="Choose anything" multiple>
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
