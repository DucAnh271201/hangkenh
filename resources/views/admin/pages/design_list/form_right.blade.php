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
                Ảnh bài viết
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
                Thư viện
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
