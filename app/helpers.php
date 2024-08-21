<?php

if (!function_exists('convert_vi_to_en')) {
    function convert_vi_to_en($str)
    {
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/', 'A', $str);
        $str = preg_replace('/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/', 'E', $str);
        $str = preg_replace('/(Ì|Í|Ị|Ỉ|Ĩ)/', 'I', $str);
        $str = preg_replace('/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/', 'O', $str);
        $str = preg_replace('/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/', 'U', $str);
        $str = preg_replace('/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/', 'Y', $str);
        $str = preg_replace('/(Đ)/', 'D', $str);
        // $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
        $str = preg_replace('/[^A-Za-z0-9]/', '', $str);

        return $str;
    }
}

if (!function_exists('iam')) {
    /**
     * @return mixed
     */
    function iam()
    {
        return request()->user();
    }
}


if (!function_exists('make_prefix_log_message')) {
    function make_prefix_log_message($class, $function, $line, $message): string
    {
        return "$class-$function:($line) ===> $message";
    }
}


if (!function_exists('convert_vi_to_en')) {
    function convert_vi_to_en($str)
    {
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/', 'A', $str);
        $str = preg_replace('/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/', 'E', $str);
        $str = preg_replace('/(Ì|Í|Ị|Ỉ|Ĩ)/', 'I', $str);
        $str = preg_replace('/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/', 'O', $str);
        $str = preg_replace('/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/', 'U', $str);
        $str = preg_replace('/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/', 'Y', $str);
        $str = preg_replace('/(Đ)/', 'D', $str);
        // $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
        $str = preg_replace('/[^A-Za-z0-9]/', '', $str);

        return $str;
    }
}

if (!function_exists('iam')) {
    /**
     * @return mixed
     */
    function iam()
    {
        return request()->user();
    }
}

if (!function_exists('response_success')) {
    /**
     * @param mixed $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function response_success($data = [], string $message = null, array $extraData = [])
    {
        $responseData = [
            'success' => true,
            'message' => !empty($message) ? $message : __('global.success'),
            'data' => !empty($data) ? $data : new stdClass(),
        ];

        $responseData = array_merge($responseData, $extraData);

        return response()->json($responseData);
    }
}

if (!function_exists('response_error')) {
    /**
     * @param int $httpStatusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function response_error(int $errorCode = 1000, string $message = null, int $httpStatusCode = 500, array $errors = [], array $extraData = [])
    {
        $responseData = [
            'success' => false,
            'message' => !empty($message) ? $message : \App\Utils\HttpResponseErrorCode::getErrorMessage($errorCode),
            'code' => $errorCode,
            'errors' => $errors,
        ];

        $responseData = array_merge($responseData, $extraData);

        return response()->json($responseData, $httpStatusCode);
    }
}

if (!function_exists('get_option')) {

    function get_option($optionName = '')
    {
        $option = app(\App\Services\Options\OptionService::class);
        return $option->findByOptionName($optionName);
    }
}

if (!function_exists('get_post')) {

    function get_post($type = 'post')
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->getPostHelper($type);
    }
}

if (!function_exists('get_post_id')) {

    function get_post_id($id)
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->find($id);
    }
}
if (!function_exists('get_post_slug')) {

    function get_post_slug($slug, $type = 'post')
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->findBySlugAndType($slug, $type);
    }
}

if (!function_exists('get_posts')) {

    function get_posts($ids = '', $catId = 0, $sort = 'id', $sortDirection = 'DESC', $paginate = false, $perPage = 10, $type = 'post')
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->getPosts(
            ids: $ids,
            catId: $catId,
            sort: $sort,
            sortDirection: $sortDirection,
            paginate: $paginate,
            perPage: $perPage,
            type: $type
        );
    }
}

if (!function_exists('getProducts')) {

    function get_products($ids = '', $catId = 0, $sort = 'id', $sortDirection = 'DESC', $paginate = false, $perPage = 10)
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->getProducts(
            ids: $ids,
            catId: $catId,
            sort: $sort,
            sortDirection: $sortDirection,
            paginate: $paginate,
            perPage: $perPage
        );
    }
}

if (!function_exists('get_page_single')) {

    function get_page_single($pageName)
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->getPageSingle($pageName);
    }
}


if (!function_exists('get_pages')) {

    function get_pages()
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->getPages();
    }
}


if (!function_exists('get_page_id')) {

    function get_page_id($pageId)
    {
        $option = app(\App\Services\Post\PostService::class);
        return $option->find($pageId);
    }
}


if (!function_exists('format_date')) {

    function format_date($date, $format = 'Y-m-d H:i:s')
    {

        return date($format, strtotime($date));
    }
}

if (!function_exists('get_permalink')) {

    function get_permalink($object)
    {
        if ($object instanceof \App\Models\Post) {
            $option = app(\App\Services\Post\PostService::class);
            return $option->getPermalink($object);
        }
        if ($object instanceof \App\Models\Category) {
            return '/product-category/' . $object->slug;
        }

        return $object->slug;
    }
}

if (!function_exists('get_main_category')) {

    function get_main_category(\Illuminate\Database\Eloquent\Collection $categories)
    {
        if ($categories->isEmpty()) {
            return null;
        }

        $category = $categories[0];

        return $category;
    }
}


if (!function_exists('get_menu_nav')) {

    function get_menu_nav($menuName = '')
    {

        return app(\App\Helpers\WMenu::class)::getByName($menuName);
    }
}


if (!function_exists('dt_get')) {

    function dt_get($object, $key, $default = '')
    {
        try {
            if (!$object) {
                return $default;
            }

            return $object->$key;
        } catch (Exception $exception) {

        }
        return $default;

    }
}

if (!function_exists('dt_get_meta')) {

    function dt_get_meta($object, $key, $default = '')
    {
        try {
            if (!$object) {
                return $default;
            }
            return $object->findByMetaKey($key);
        } catch (Exception $exception) {

        }
        return $default;

    }
}

if (!function_exists('get_meta_extra')) {

    function get_meta_extra($object, $key, $default = '')
    {
        try {
            if (!$object) {
                return $default;
            }
            return unserialize(dt_get_meta($object, $key));
        } catch (Exception $exception) {

        }
        return $default;

    }
}


if (!function_exists('get_data_first_arr')) {

    function get_data_first_arr($data, $key)
    {
        try {

            return $data[0][$key];
        } catch (Exception $exception) {

        }
        return '';

    }
}

if (!function_exists('get_media')) {

    function get_media($object, $key, $objectId, $default = '')
    {
        try {
            $data = dt_get_meta($object, $key);
            if (!$data) {
                return '';
            }
            $data = unserialize($data);

            return $data[$objectId] ?? $data[0][$objectId];

        } catch (Exception $exception) {

        }
        return $default;

    }
}
if (!function_exists('is_mobile')) {
    function is_mobile()
    {
        $userAgent = request()->header('User-Agent');
        // Define an array of keywords commonly found in mobile user agents
        $mobileKeywords = ['Mobile', 'Android', 'Silk/', 'Kindle', 'BlackBerry', 'Opera Mini', 'Opera Mobi'];

        // Check if any of the mobile keywords are present in the user agent
        $isMobile = false;
        foreach ($mobileKeywords as $keyword) {
            if (strpos($userAgent, $keyword) !== false) {
                $isMobile = true;
                break;
            }
        }
        return $isMobile;
    }
}
