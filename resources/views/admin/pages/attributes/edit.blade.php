<form id="saveAttribute" action="{{ route('admin.api.attributes.update') }}"
      method="post">
    @csrf
    <h3>Sửa thuộc tính {{ $attribute->title }}</h3>
    <input id="attribute_id" type="hidden" name="id" value="{{ $attribute->id }}">
    @include('admin.pages.attributes.form')
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sửa thuộc tính</button>
    </div>
</form>
