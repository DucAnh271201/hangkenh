<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Tên ngắn dự án <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="meta_data[short_title]"
                   placeholder="Tên ngắn dự án" value="{{ dt_get_meta($post, 'short_title') }}" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tên dự án <span class="text-danger">*</span></label>
            <input id="title" type="text" class="form-control" name="title"
                   placeholder="Tên bài viết" value="{{ $post->title ?? '' }}" autofocus required>
            <div id="title_error" class="validate-error">

            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Đường dẫn <span class="text-danger">*</span></label>
            <input type="text" id="seoSlug" class="form-control" name="slug" value="{{ $post->slug ?? '' }}" required>

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
<div class="accordion bg-white mt-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#project_block" aria-expanded="true">
                Thư viện ảnh dự án
            </button>
        </h2>
        <div id="project_block" class="accordion-collapse collapse show">
            <div class="mt-2 p-4">
                <div x-data="dynamicForm({{ json_encode(get_meta_extra($post, 'project_library')) }})"
                     class="accordion bg-white mt-3">
                    <template x-for="(attr, index) in fields" :key="index">
                        <div class="accordion-item">
                            <h2 class="accordion-header position-relative">
                                <button class="accordion-button " type="button"
                                        data-bs-toggle="collapse"
                                        :data-bs-target="`#action-${index}`" aria-expanded="true">
                                    <span x-text="`#${index + 1}`"></span>
                                </button>

                            </h2>
                            <div :id="`action-${index}`" class="accordion-collapse collapse">
                                <div class="accordion-body pt-0">
                                    <div class="form-group mb-3" style="width: 130px">
                                        <div :id="`image_proj_${index}`"
                                             class="image-post-box d-flex align-items-center justify-content-center open-media-modal"
                                             data-multiple="false"
                                             :data-refer-id="`#image_proj_${index}`"
                                             :data-input-name="`meta_data[project_library][${index}][image]`"
                                             :data-image-ids="attr.image[0].id"
                                        >
                                            <input type="hidden"
                                                   :name="`meta_data[project_library][${index}][image][0][id]`"
                                                   x-model="attr.image[0].id">
                                            <input type="hidden"
                                                   :name="`meta_data[project_library][${index}][image][0][image]`"
                                                   x-model="attr.image[0].image">
                                            <template
                                                x-if="attr.image"
                                            >
                                                <img :src="attr.image[0].image"
                                                     class="w-100 h-100 object-cover"
                                                >
                                            </template>


                                            <div
                                                class="icon d-flex align-items-center justify-content-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     stroke-width="1"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 5l0 14"/>
                                                    <path d="M5 12l14 0"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="" class="form-label">Tiêu đề</label>
                                            <input type="text" class="form-control"
                                                   :name="`meta_data[project_library][${index}][title]`"
                                                   x-model="attr.title">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="form-label">Mô tả</label>
                                            <textarea class="form-control" rows="5"
                                                      :name="`meta_data[project_library][${index}][description]`"
                                                      x-model="attr.description"></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger mt-3"
                                            style="float: right" @click="removeField(index)">Xóa
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </template>
                    <button type="button" @click="addField()" class="btn btn-outline-primary mx-auto d-block mt-3 mb-5">
                        Thêm block
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function dynamicForm(initialFields) {
        if (!initialFields) {
            initialFields = []
        }
        return {
            // Danh sách các field, mỗi field là một đối tượng với value
            fields: initialFields,

            // Phương thức thêm field mới
            addField() {
                this.fields.push({title: '', value: ''});
            },

            // Phương thức xóa field theo index
            removeField(index) {
                this.fields.splice(index, 1);
            }
        }
    }
</script>

@include('admin.pages.posts.yoast_seo')
