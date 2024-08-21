<div class="accordion bg-white mt-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#data_block" aria-expanded="true">
                Dữ liệu sản phẩm
            </button>
        </h2>
        <div id="data_block" class="accordion-collapse collapse show">
            <div class="card-body pb-4 px-4" style="min-height: 300px">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link active" data-bs-toggle="pill"
                                    data-bs-target="#general" type="button" role="tab" aria-controls="general"
                                    aria-selected="true">Chung
                            </button>
                            <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#stock" type="button" role="tab" aria-controls="stock"
                                    aria-selected="false">Kiểm kê kho hàng
                            </button>
                            <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#attribute" type="button" role="tab" aria-controls="attribute"
                                    aria-selected="false">Các thuộc tính
                            </button>
                            <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#variants" type="button" role="tab" aria-controls="variants"
                                    aria-selected="false">Sản phẩm biến thể
                            </button>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content py-3 pe-3" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel">
                                <x-forms.input-v
                                    id="regular-price-input"
                                    label="Giá bán thường (đ):"
                                    name="regular_price"
                                    class-input="w-50"
                                    :value="isset($post) ? $post->regular_price : ''"
                                />
                                <x-forms.input-v
                                    id="sale-price-input"
                                    label="Giá khuyến mại (đ):"
                                    name="sale_price"
                                    class-input="w-50"
                                    :value="isset($post)  ? $post->sale_price : ''"
                                />
                            </div>
                            <div class="tab-pane fade" id="stock" role="tabpanel">
                                <x-forms.input-v
                                    label="Mã sản phẩm:"
                                    name="sku"
                                    class-input="w-50"
                                    :value="$post->sku ?? ''"
                                />
                                <x-forms.input-v
                                    label="Số lượng trong kho:"
                                    name="stock_quantity"
                                    class-input="w-50"
                                    :value="$post->stock_quantity ?? ''"
                                />
                                <x-forms.select-v
                                    label="Trạng thái kho hàng:"
                                    name="product_status"
                                    class-input="w-50"
                                    :options="$productStatuses"
                                    :value="$post->product_status ?? ''"
                                />
                            </div>
                            <div class="tab-pane fade" id="attribute" role="tabpanel">
                                <div class="form-group">
                                    <select name="attribute[]" class="form-control" id="attribute-select" multiple
                                            placeholder="Chọn thuộc tính">
                                        <option>Chọn thuộc tính</option>
                                        @foreach($attributes as $attr)
                                            <option value="{{ $attr->id }}"
                                                    @if($attr->dept == 0) class="fw-bold" @endif
                                                    @if(isset($post) && !empty($post->attribute_ids) && in_array($attr->id, $post->attribute_ids))
                                                        selected
                                                @endif
                                            >
                                                {{ $attr->title_dept }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @php($attributeRoot = $attributes->where('parent_id', 0))
                            <div x-data="dataVariants({{ json_encode($attributes) }})" class="tab-pane fade"
                                 id="variants" role="tabpanel">
                                <div class="form-group d-flex align-items-center gap-3">
                                    <select x-model="selectedAttrParentId" class="form-control" style="width: 50%"
                                            :name="`meta_data[variant_attr_parent_id]`"
                                            @change="onChangeVariantParent">
                                        <option>Chọn thuộc tính</option>
                                        <template x-for="attr in variantParent" :key="attr.id">
                                            <option :value="attr.id" x-text="attr.title"></option>
                                        </template>
                                        {{--                                        @foreach($attributeRoot as $attr)--}}
                                        {{--                                            <option value="{{ $attr->id }}"--}}
                                        {{--                                            >--}}
                                        {{--                                                {{ $attr->title_dept }}--}}
                                        {{--                                            </option>--}}
                                        {{--                                        @endforeach--}}
                                    </select>
                                    <select x-model="selectedAttrId" class="form-control" style="width: 50%"
                                            :name="`meta_data[variant_attr_id]`"
                                    >
                                        <option>Chọn thuộc tính con</option>
                                        <template x-for="attr in attrWithParentId" :key="attr.id">
                                            <option :value="attr.id" x-text="attr.title"></option>
                                        </template>
                                    </select>
                                    <button type="button" class="btn btn-primary" @click="addField">Chọn</button>
                                </div>

                                <div class="mt-2">
                                    <div class="accordion bg-white mt-3">
                                        <template x-for="(attr, index) in formAttrs" :key="index">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header position-relative">
                                                    <button class="accordion-button " type="button"
                                                            data-bs-toggle="collapse"
                                                            :data-bs-target="`#action-${index}`" aria-expanded="true">
                                                        <span x-text="attr.title"></span>
                                                    </button>

                                                </h2>
                                                <div :id="`action-${index}`" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordion-example">
                                                    <input type="hidden" :name="`variant[${index}][id]`" :value="attr.id">
                                                    <input type="hidden" :name="`variant[${index}][attribute_id]`" :value="attr.id">
                                                    @php($objectId = '11')
                                                    @php($objectImage = '11')
                                                    <div class="accordion-body pt-0">
                                                        <div class="form-group mb-3" style="width: 130px">
                                                            <div :id="`image_attr_${index}`"
                                                                 class="image-post-box d-flex align-items-center justify-content-center open-media-modal"
                                                                 data-multiple="false"
                                                                 :data-refer-id="`#image_attr_${index}`"
                                                                 :data-input-name="`variant[${index}][image]`"
                                                                 data-image-ids="{{ $objectId }}"
                                                            >
                                                                @if(!empty($objectId))
                                                                    <input type="hidden" :name="`variant[${index}][0][id]`">
                                                                    <input type="hidden" :name="`variant[${index}][0][image]`">
                                                                    <img
                                                                        class="w-100 h-100 object-cover">
                                                                @endif

                                                                <div
                                                                    class="icon d-flex align-items-center justify-content-center {{ $objectImage ? 'd-none' : '' }}">
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
                                                        <div class="row mb-3">
                                                            <div class="col-6 form-group">
                                                                <label for="" class="form-label">Mã sản phẩm</label>
                                                                <input type="text" class="form-control" :name="`variant[${index}][sku]`">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <label for="" class="form-label">Trạng thái</label>
                                                                <select class="form-control" :name="`variant[${index}][status]`">
                                                                    @foreach($productStatuses as $status)
                                                                        <option
                                                                            value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6 form-group">
                                                                <label for="" class="form-label">Giá</label>
                                                                <input type="text" class="form-control" :name="`variant[${index}][regular_price]`">
                                                            </div>
                                                            <div class="col-6 form-group">
                                                                <label for="" class="form-label">Giá ưu đãi</label>
                                                                <input type="text" class="form-control" :name="`variant[${index}][sale_price]`">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12 form-group">
                                                                <label for="" class="form-label">Mô tả</label>
                                                                <textarea class="form-control" rows="5" :name="`variant[${index}][description]`"></textarea>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function dataVariants(initialFields) {

        const variantParent = initialFields.filter(item => item.parent_id === 0)

        return {
            // Danh sách các field, mỗi field là một đối tượng với value
            fields: initialFields,
            variantParent: variantParent,
            selectedAttrParentId: '',
            selectedAttrId: '',
            attrWithParentId: [],
            formAttrs: [],
            onChangeVariantParent() {
                this.selectedAttrId = ''
                this.attrWithParentId = []
                this.formAttrs = []
                this.attrWithParentId = this.fields.filter(item => item.parent_id == this.selectedAttrParentId)

            },
            // Phương thức thêm field mới
            addField() {

                const checkExist = this.formAttrs.some(item => item.id == this.selectedAttrId)
                if (!checkExist) {
                    const data = this.fields.find(item => item.id == this.selectedAttrId)
                    if (data)
                        this.formAttrs.unshift(data);
                }

            },
            // Phương thức xóa field theo index
            removeField(index) {
                this.formAttrs.splice(index, 1);
            }
        }
    }
</script>
