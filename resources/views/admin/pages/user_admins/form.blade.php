<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Tên quản trị viên <span class="text-danger">*</span></label>
                    <input id="title" type="text" class="form-control" name="name"
                           placeholder="Tên quản trị viên" value="{{ $user->name ?? '' }}" autofocus required>
                    <div id="name_error" class="validate-error">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Username <span class="text-danger">*</span></label>
                    <input id="title" type="text" class="form-control" name="username"
                           placeholder="Username" value="{{ $user->username ?? '' }}"  required>
                    <div id="username_error" class="validate-error">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Email <span class="text-danger">*</span></label>
                    <input id="title" type="email" class="form-control" name="email"
                           placeholder="email" value="{{ $user->email ?? '' }}"  required>
                    <div id="email_error" class="validate-error">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Mật khẩu @empty($user) <span class="text-danger">*</span>@endempty</label>
                    <input id="title" type="text" class="form-control" name="password"
                           placeholder="Nhập mật khẩu" @empty($user) required @endempty>
                    <div id="password_error" class="validate-error">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Role <span class="text-danger">*</span></label>
                    <select name="role_id" class="form-control">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ isset($user->role_id) && $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>

            </div>
        </div>
    </div>
</div>
