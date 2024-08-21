<form id="saveCategory" action="{{ route('admin.api.categories.update') }}"
      method="post">
    @csrf
    <h3>Sửa chuyên mục {{ $category->title }}</h3>
    <input id="category_id" type="hidden" name="id" value="{{ $category->id }}">
    @include('admin.pages.categories.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sửa chuyên mục</button>
    </div>
</form>
