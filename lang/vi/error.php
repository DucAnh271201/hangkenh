<?php

/**
 * Created by PhpStorm.
 * User: tungnt
 * Date: 12/14/19
 * Time: 09:41.
 */

use App\Utils\HttpResponseErrorCode;

return [
    HttpResponseErrorCode::CODE_1000 => 'Đã có lỗi xảy ra. Vui lòng thử lại sau',
    HttpResponseErrorCode::CODE_1001 => 'Missing Headers.',
    HttpResponseErrorCode::CODE_1002 => 'Missing Parameters.',
    HttpResponseErrorCode::CODE_1003 => 'Invalid offset or limit',
    HttpResponseErrorCode::CODE_1004 => 'Không có dữ liệu',
    HttpResponseErrorCode::CODE_1005 => 'Tài khoản hoặc mật khẩu không chính xác.',
    HttpResponseErrorCode::CODE_1006 => 'Tài khoản đã tồn tại',
    HttpResponseErrorCode::CODE_1009 => 'Yêu cầu bị trì hoãn',
    HttpResponseErrorCode::CODE_1010 => 'Không tìm thấy thông tin',
    HttpResponseErrorCode::CODE_1011 => 'Số tài khoản hoặc tên tài khoản chưa đúng. Vui lòng kiểm tra lại',
    HttpResponseErrorCode::CODE_1012 => 'Tham số không hợp lệ.',
    HttpResponseErrorCode::CODE_1013 => 'Phiên đăng nhập hết hạn, vui lòng đăng nhập lại.',

];
