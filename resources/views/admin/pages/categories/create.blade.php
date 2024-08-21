<form id="saveCategory" action="{{ route('admin.api.categories.store') }}"
      method="post">
    @csrf
    <h3>Thêm chuyên mục</h3>
    <input id="category_id" type="hidden" name="id">
    @include('admin.pages.categories.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Thêm chuyên mục</button>
    </div>
</form>
