<div class="accordion bg-white mt-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#banner_block" aria-expanded="true">
                Cấu hình banner
            </button>
        </h2>
        <div id="banner_block" class="accordion-collapse collapse show">
            <div class="card-body pb-4 px-4" style="height: 300px">
                <div class="mb-3">
                    <label for="title" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" name="meta_data[banner_title]"
                           placeholder="Tiêu đề" value="{{ dt_get_meta($post, 'banner_title') }}">
                </div>
                <div>
                    @php($bannerId = get_media($post, 'banner_image', 'id'))
                    @php($bannerImage = get_media($post, 'banner_image', 'image'))
                    <div id="banner_image"
                         class="image-post-box d-flex align-items-center justify-content-center open-media-modal"
                         data-multiple="false"
                         data-refer-id="#banner_image"
                         data-input-name="meta_data[banner_image]"
                         data-image-ids="{{ $bannerId }}"
                    >
                        @if(!empty($bannerId))
                            <input type="hidden" name="meta_data[banner_image][0][id]" value="{{ $bannerId }}">
                            <input type="hidden" name="meta_data[banner_image][0][image]" value="{{ $bannerImage }}">
                            <img
                                src="{{ $bannerImage }}"
                                class="w-100 h-100 object-cover">
                        @endif

                        <div
                            class="icon d-flex align-items-center justify-content-center {{ $bannerId ? 'd-none' : '' }}">
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
