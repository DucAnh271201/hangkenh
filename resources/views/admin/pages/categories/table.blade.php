<table class="table">
    <thead>
    <tr>
        <th>
            <button class="table-sort" data-sort="sort-id">ID</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-title">Tiêu đề</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-slug">Đường dẫn</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-date">Thời gian</button>
        </th>
    </tr>
    </thead>
    <tbody class="table-tbody">
    @forelse($categories as $cat)
        <tr>
            <td class="sort-id">{{ $cat->id }}</td>
            <td class="sort-title position-relative">
                <a href="{{ route('admin.manager-category') . "?parent_id={$cat->id}&type={$cat->type}" }}">{{ $cat->title }}</a>
                <x-cell-action
                    :id="$cat->id"
                    route-edit="admin.manager-category.edit"
                    route-delete="admin.api.categories.destroy"
                />
            </td>
            <td class="sort-city">{{ $cat->slug }}</td>
            <td class="sort-date" data-date="1570144735">{{ $cat->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">Không có dữ liệu</td>
        </tr>
    @endforelse

    </tbody>
</table>
<div class="mt-4">
    {!! $categories->links('pagination::bootstrap-5') !!}
</div>

