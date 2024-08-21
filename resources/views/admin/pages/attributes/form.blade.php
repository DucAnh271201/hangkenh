<div class="form-group mb-3">
    <label for="" class="form-label">Tiêu đề <span
            class="text-danger">*</span></label>
    <input id="attribute-title" type="text" class="form-control" name="title" value="{{ $attribute->title ?? '' }}"
           required>
    <div id="title_error">

    </div>
</div>
<div class="form-group mb-3">
    <label for="" class="form-label">Đường dẫn</label>
    <input id="attribute-slug" type="text" class="form-control" name="slug" value="{{ $attribute->slug ?? '' }}">
    <small class="text-gray-100">“slug” là đường dẫn thân thiện của tên. Nó thường
        chỉ bao
        gồm kí tự viết thường, số và dấu gạch ngang, không dùng tiếng Việt.</small>
</div>

<div class="form-group mb-3">
    <label for="" class="form-label">Chuyên mục cha</label>
    <select id="attribute_parent_id" name="parent_id"
            class="form-control">
        <option value="">Chọn danh mục cha</option>
        @if(isset($attributes) && $attributes->isNotEmpty())
            @foreach($attributes as $attr)
                <option value="{{ $attr->id }}"
                    {{
                        (isset($attribute) && $attr->id == $attribute->parent_id) ||
                        (request('parent_id') == $attr->id)
                        ? 'selected'
                         : ''
                          }}
                >{{ $attr->title }}</option>
            @endforeach
        @endif
    </select>
</div>
<div class="form-group mb-3">
    <label for="" class="form-label">Mã màu</label>
    <input id="attribute-color" type="text" class="form-control" name="color" value="{{ $attribute->color ?? '' }}">
</div>


<div class="form-group mb-3">
    <label for="" class="form-label">Mẫu</label>
    <select id="attribute-template" name="template" class="form-control">
        <option value="default" {{ !empty($attribute) && $attribute->template == 'default' ? 'selected' : '' }}>Mặc định</option>
        <option value="color" {{ !empty($attribute) && $attribute->template == 'color' ? 'selected' : '' }}>Màu</option>
    </select>
</div>

<div class="form-group mb-3">
    <label for="" class="form-label">Thứ tự</label>
    <input id="attribute-in-order" type="number" min="0" class="form-control" name="in_order" value="{{ $attribute->in_order ?? '' }}">
</div>

<div class="form-group mb-3">
    <label for="" class="form-label">Mô tả</label>
    <textarea name="description" class="form-control" rows="3">{{ $attribute->description ?? '' }}</textarea>
</div>
