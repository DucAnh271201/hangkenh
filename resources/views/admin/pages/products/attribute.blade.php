<div class="accordion bg-white mt-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#attribute_block" aria-expanded="true">
                Thuộc tính sản phẩm
            </button>
        </h2>
        <div id="attribute_block" class="accordion-collapse collapse show">
            <div x-data="dynamicForm({{ !empty(dt_get_meta($post, 'product_attrs')) ? json_encode(unserialize(dt_get_meta($post, 'product_attrs'))) : '' }})"
                 class="card-body pb-4 px-4">
                <div class="row">
                    <div class="col-5">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Giá trị</label>
                        </div>
                    </div>

                </div>
                <template x-for="(field, index) in fields" :key="index">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <input :id="`title-${index}`" type="text" class="form-control"
                                       x-model="field.title"
                                       x-bind:name="`meta_data[product_attrs][${index}][title]`">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <input :id="`value-${index}`" type="text" class="form-control"
                                       x-model="field.value"
                                       x-bind:name="`meta_data[product_attrs][${index}][value]`">
                            </div>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-danger" @click="removeField(index)">Xóa</button>
                        </div>
                    </div>
                </template>
                <button type="button" @click="addField()" class="btn btn-outline-primary mx-auto d-block">Thêm block
                </button>

            </div>
        </div>
    </div>
</div>
<script>
    function dynamicForm(initialFields) {
        if(!initialFields){
            initialFields = []
        }
        return {
            // Danh sách các field, mỗi field là một đối tượng với value
            fields: initialFields,

            // Phương thức thêm field mới
            addField() {
                this.fields.push({title: '',value: ''});
            },

            // Phương thức xóa field theo index
            removeField(index) {
                this.fields.splice(index, 1);
            }
        }
    }
</script>
