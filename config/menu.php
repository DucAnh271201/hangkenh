<?php

return [
    [
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M5 12l-2 0l9 -9l9 9l-2 0"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/><path
                            d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/></svg>',
        'name' => 'Home',
        'type' => 'home',
        'route' => 'admin.dashboard',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => []
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-photo-scan"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M6 13l2.644 -2.644a1.21 1.21 0 0 1 1.712 0l3.644 3.644" /><path d="M13 13l1.644 -1.644a1.21 1.21 0 0 1 1.712 0l1.644 1.644" /><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /></svg>',
        'name' => 'Media',
        'type' => 'Media',
        'route' => 'admin.media',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => []
    ],
    [
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"/><path d="M12 12l8 -4.5"/><path
                            d="M12 12l0 9"/><path d="M12 12l-8 -4.5"/><path d="M16 5.25l-8 4.5"/></svg>',
        'name' => 'Bài viết',
        'type' => 'post',
        'route' => '',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => [
            [
                'name' => 'Tất cả bài viết',
                'route' => 'admin.manager-post',
                'query_params' => "?type=post",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Thêm mới bài viết',
                'route' => 'admin.manager-post.create',
                'query_params' => "?type=post",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Chuyên mục',
                'route' => 'admin.manager-category',
                'query_params' => "?type=post",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
        ]
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-notebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" /><path d="M13 8l2 0" /><path d="M13 12l2 0" /></svg>',
        'name' => 'Trang',
        'type' => 'page',
        'route' => '',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => [
            [
                'name' => 'Tất cả trang',
                'route' => 'admin.manager-page',
                'query_params' => "?type=page",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Thêm mới',
                'route' => 'admin.manager-page.create',
                'query_params' => "?type=page",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
        ]
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-palette"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" /><path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>',
        'name' => 'Nhà thiết kế',
        'type' => 'ntk',
        'route' => '',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => [
            [
                'name' => 'Nhà thiết kế',
                'route' => 'admin.manager-designer',
                'query_params' => "",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Thêm mới',
                'route' => 'admin.manager-designer.create',
                'query_params' => "",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
        ]
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-fortress"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 21h1a1 1 0 0 0 1 -1v-1h0a3 3 0 0 1 6 0m3 2h1a1 1 0 0 0 1 -1v-15l-3 -2l-3 2v6h-4v-6l-3 -2l-3 2v15a1 1 0 0 0 1 1h2m8 -2v1a1 1 0 0 0 1 1h2" /><path d="M7 7h0v.01" /><path d="M7 10h0v.01" /><path d="M7 13h0v.01" /><path d="M17 7h0v.01" /><path d="M17 10h0v.01" /><path d="M17 13h0v.01" /></svg>',
        'name' => 'Dự án/Công trình',
        'type' => 'project',
        'route' => '',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => [
            [
                'name' => 'Danh sách dự án',
                'route' => 'admin.manager-project',
                'query_params' => "?type=project",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Thêm mới dự án',
                'route' => 'admin.manager-project.create',
                'query_params' => "?type=project",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Chuyên mục',
                'route' => 'admin.manager-category',
                'query_params' =>"?type=project",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
        ]
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-store"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" /><path d="M5 21l0 -10.15" /><path d="M19 21l0 -10.15" /><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" /></svg>',
        'name' => 'Sản phẩm',
        'type' => 'product',
        'route' => '',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => [
            [
                'name' => 'Tất cả sản phẩm',
                'route' => 'admin.manager-product',
                'query_params' => "?type=product",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Thêm mới sản phẩm',
                'route' => 'admin.manager-product.create',
                'query_params' => "?type=product",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Chuyên mục',
                'route' => 'admin.manager-category',
                'query_params' => "?type=product",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
            [
                'name' => 'Thuộc tính',
                'route' => 'admin.manager-attribute',
                'query_params' => "",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
        ]
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-app-window"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>',
        'name' => 'Giao diện',
        'type' => '',
        'route' => '',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => [
            [
                'name' => 'Menu',
                'route' => 'admin.menu',
                'query_params' => "",
                'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
                'childs' => []
            ],
//            [
//                'name' => 'Cấu hình',
//                'route' => 'admin.option',
//                'query_params' => "",
//                'childs' => []
//            ],
        ]
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>',
        'name' => 'Cấu hình',
        'type' => '',
        'route' => 'admin.option',
        'permissions' => ['SuperAdmin', 'Marketing', 'Content'],
        'childs' => []
    ],
    [
        'icon'  => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-pentagon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13.163 2.168l8.021 5.828c.694 .504 .984 1.397 .719 2.212l-3.064 9.43a1.978 1.978 0 0 1 -1.881 1.367h-9.916a1.978 1.978 0 0 1 -1.881 -1.367l-3.064 -9.43a1.978 1.978 0 0 1 .719 -2.212l8.021 -5.828a1.978 1.978 0 0 1 2.326 0z" /><path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" /><path d="M6 20.703v-.703a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.707" /></svg>',
        'name' => 'Quản trị viên',
        'type' => '',
        'route' => '',
        'permissions' => ['SuperAdmin'],
        'childs' => [
            [
                'name' => 'Danh sách quản trị viên',
                'route' => 'admin.manager-user-admin',
                'query_params' => "",
                'permissions' => ['SuperAdmin'],
                'childs' => []
            ],
//            [
//                'name' => 'Cấu hình',
//                'route' => 'admin.option',
//                'query_params' => "",
//                'childs' => []
//            ],
        ]
    ],
];
