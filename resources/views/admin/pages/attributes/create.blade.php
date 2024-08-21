<form id="saveAttribute" action="{{ route('admin.api.attributes.store') }}"
      method="post">
    @csrf
    <h3>Thêm thuộc tính</h3>
    <input id="attribute_id" type="hidden" name="id">
    @include('admin.pages.attributes.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Thêm thuộc tính</button>
    </div>
</form>
