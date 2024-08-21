<table class="table">
    <thead>
    <tr>
        <th>ID</th>

        <th>
            <button class="table-sort" data-sort="sort-title">Ảnh</button>
        </th>

        <th>
            <button class="table-sort" data-sort="sort-title">Tên nhà thiết kế</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-score">Đường dẫn</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-score">Trạng thái</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-date">Thời gian</button>
        </th>
    </tr>
    </thead>
    <tbody class="table-tbody">
    @forelse($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>
                @php($image = $item->image)
                @if(!empty($image))
                    @php($imageExtra = $image[0]['image'] ?? '')
                    <a href="{{ $imageExtra }}" target="_blank"><img src="{{ $imageExtra }}" width="80" height="80" alt="" ></a>
                @endif
            </td>
            <td class="sort-title">
                <a href="{{ route('admin.manager-designer.design-list', $item->id) }}">{{ $item->name }}</a>
                <x-cell-action
                    :id="$item->id"
                    route-edit="admin.manager-designer.edit"
                    route-delete="admin.api.designers.destroy"
                    :route-view="get_permalink($item)"
                    :route-list="route('admin.manager-designer.design-list', $item->id)"
                />
            </td>
            <td class="sort-city">{{ $item->slug ?? '' }}</td>
            <td class="sort-status {{ $item->status_class }}">{{ $item->status_label }}</td>
            <td class="sort-date" data-date="1570144735">{{ $item->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center">Không có dữ liệu</td>
        </tr>
    @endforelse

    </tbody>
</table>
<div class="mt-4">
    {!! $data->links('pagination::bootstrap-5') !!}
</div>

