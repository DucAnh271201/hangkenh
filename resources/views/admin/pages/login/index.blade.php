<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HangKenh - Dashboard - @yield('page-title')</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/libs/tabler/css/tabler.min.css') }}" rel="stylesheet"/>
    <base href="/">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body class="d-flex flex-column">
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark">
                <h1>ThamLenHangKenh</h1>
{{--                <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">--}}
            </a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Đăng nhập vào hệ thống</h2>
                <form action="{{ route('admin.login') }}" method="post" autocomplete="off">
                    @csrf
                    @if(session('error'))
                        <p class="text-danger text-center">{{ session('error') }}</p>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required placeholder="your@email.com" autofocus autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Mật khẩu
                            <span class="form-label-description">
                    <a href="./forgot-password.html">Quên mật khẩu</a>
                  </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required autocomplete="off">
                            <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                              d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path
                              d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/></svg>
                    </a>
                  </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input"/>
                            <span class="form-check-label">Ghi nhớ tài khoản</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="text-center text-secondary mt-3">
            Không có account hãy liên hệ admin.
        </div>
    </div>
</div>
</body>
</html>
