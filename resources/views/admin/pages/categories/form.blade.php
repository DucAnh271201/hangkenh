<input type="hidden" name="type" value="{{ $type }}">
<div class="form-group mb-3">
    <label for="" class="form-label">Tiêu đề ngắn</label>
    <input id="category-short-title" type="text" class="form-control" name="short_title"
           value="{{ $category->short_title ?? '' }}"
    >
    <div id="short_title_error">

    </div>
</div>
<div class="form-group mb-3">
    <label for="" class="form-label">Tiêu đề <span
            class="text-danger">*</span></label>
    <input id="category-title" type="text" class="form-control" name="title" value="{{ $category->title ?? '' }}"
           required>
    <div id="title_error">

    </div>
</div>
<div class="form-group mb-3">
    <label for="" class="form-label">Đường dẫn</label>
    <input id="category-slug" type="text" class="form-control" name="slug" value="{{ $category->slug ?? '' }}">
    <small class="text-gray-100">“slug” là đường dẫn thân thiện của tên. Nó thường
        chỉ bao
        gồm kí tự viết thường, số và dấu gạch ngang, không dùng tiếng Việt.</small>
</div>

<div class="form-group mb-3">
    <label for="" class="form-label">Chuyên mục cha</label>
    <select id="category_parent_id" name="parent_id"
            class="form-control">
        <option value="">Chọn danh mục cha</option>
        @if(isset($categories) && $categories->isNotEmpty())
            @foreach($categories as $cate)
                <option value="{{ $cate->id }}" {{ (isset($category) && $cate->id == $category->parent_id) ||
                        (request('parent_id') == $cate->id)
                        ? 'selected' : '' }}
                >
                    {{ $cate->title }}
                </option>
            @endforeach
        @endif
    </select>
    <small class="text-gray-100">Chuyên mục khác với thẻ, bạn có thể sử dụng nhiều
        cấp
        chuyên mục. Ví dụ: Trong chuyên mục nhạc, bạn có chuyên mục con là nhạc Pop,
        nhạc
        Jazz. Việc này hoàn toàn là tùy theo ý bạn.</small>
</div>

<div class="form-group mb-3">
    <label for="" class="form-label">Mô tả</label>
    <textarea name="description" class="form-control" rows="3">{{ $category->description ?? '' }}</textarea>
</div>
