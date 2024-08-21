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
            <button class="table-sort" data-sort="sort-type">Chuyên mục</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-score">Thẻ</button>
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
                <x-cell-action
                    :id="$post->id"
                    route-edit="admin.manager-project.edit"
                    route-delete="admin.api.posts.destroy"
                    :route-view="get_permalink($post)"
                />
            </td>
            <td class="sort-city">{{ $post->post_author_name ?? '' }}</td>
            <td class="sort-type">
                @php($linkArray = [])
                @foreach($post->categories as $index => $cat)
                    @php($linkArray[] = "<a href='#'>". $cat->title ."</a>")
                @endforeach
                {!! implode(',', $linkArray) !!}
            </td>
            <td class="sort-score">
                @php($linkArray = [])
                @foreach($post->tags as $index => $tag)
                    @php($linkArray[] = "<a href='#'>". $tag->title ."</a>")
                @endforeach
                {!! implode(',', $linkArray) !!}
            </td>
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

