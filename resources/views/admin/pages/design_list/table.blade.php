<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>
            <button class="table-sort" data-sort="sort-title">Tiêu đề</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-city">Tác giả</button>
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
    @forelse($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td class="sort-title">
                {{ $post->title }}
                <div class="cell-action">
                    <a href="{{ route('admin.manager-designer.design-list.edit', ['author_id' => $post->author_id, 'id' => $post->id]) }}"
                       class="cell-action-edit text-primary">
                        <span>Chỉnh sửa</span>
                    </a>

                    <a href="{{ route('admin.api.posts.destroy', $post->id) }}" class="cell-action-delete text-danger">
                        <span>Thùng rác</span>
                    </a>
                    {{--                    <a href="{{ $routeView }}" target="_blank" class="text-primary">--}}
                    {{--                        <span>Xem</span>--}}
                    {{--                    </a>--}}
                </div>

            </td>
            <td class="sort-city">{{ $post->designer->short_name ?? $post->designer->name }}</td>
            <td class="sort-status {{ $post->status_class }}">{{ $post->status_label }}</td>
            <td class="sort-date" data-date="1570144735">{{ $post->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center">Không có dữ liệu</td>
        </tr>
    @endforelse

    </tbody>
</table>
<div class="mt-4">
    {!! $posts->links('pagination::bootstrap-5') !!}
</div>

