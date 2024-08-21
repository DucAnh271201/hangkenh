<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>
            <button class="table-sort" data-sort="sort-title">Tên</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-city">Username</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-type">Email</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-score">Role</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-score">Trạng thái</button>
        </th>
        <th>
            <button class="table-sort" data-sort="sort-score">Ngày tạo</button>
        </th>
    </tr>
    </thead>
    <tbody class="table-tbody">
    @forelse($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td class="sort-title">
                {{ $user->name }}
                <x-cell-action
                    :id="$user->id"
                    route-edit="admin.manager-user-admin.edit"
                    route-delete="admin.api.user-admins.destroy"
                />
            </td>
            <td >{{ $user->username }}</td>
            <td >{{ $user->email }}</td>
            <td >{{ $user?->role?->name }}</td>
            <td class="sort-status {{ $user->status_class }}">{{ $user->status_label }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center">Không có dữ liệu</td>
        </tr>
    @endforelse

    </tbody>
</table>
<div class="mt-4">
    {!! $users->links('pagination::bootstrap-5') !!}
</div>

