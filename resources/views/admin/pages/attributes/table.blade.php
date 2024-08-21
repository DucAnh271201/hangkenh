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
    @forelse($attributes as $attr)
        <tr>
            <td class="sort-id">{{ $attr->id }}</td>
            <td class="sort-title position-relative">
                @if($attr->parent_id == 0)
                    <a href="{{ route('admin.manager-attribute') . "?parent_id={$attr->id}" }}">{{ $attr->title }}</a>
                @else
                    <span>{{ $attr->title }}</span>
                @endif
                <x-cell-action
                    :id="$attr->id"
                    route-edit="admin.manager-attribute.edit"
                    route-delete="admin.api.attributes.destroy"
                />
            </td>
            <td class="sort-city">{{ $attr->slug }}</td>
            <td class="sort-date" data-date="1570144735">{{ $attr->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">Không có dữ liệu</td>
        </tr>
    @endforelse

    </tbody>
</table>
<div class="mt-4">
    {!! $attributes->links('pagination::bootstrap-5') !!}
</div>

