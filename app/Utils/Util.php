<?php

namespace App\Utils;

use Illuminate\Support\Collection;

class Util
{
    public static function getClientIP()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }

        return $ipaddress;
    }

    /**
     * @param string $message
     * @return object
     *
     *
     */
    public static function responseFail(string $message = ''): object
    {
        return (object)[
            'status' => false,
            'message' => $message
        ];
    }

    public static function responseSuccess(string $message = ''): object
    {
        return (object)[
            'status' => true,
            'message' => $message ?? "Thành công"
        ];
    }

    public static function getImageFullPath($imagePath = ''): string
    {
        if (empty($imagePath)) {
            return '';
        }
        return config('app.url') . '/storage/' . $imagePath;
    }

    public static function getRouteMenuChild(array $childList = []): array
    {
        $childs = [];
        foreach ($childList as $child) {
            $childs[] = $child['route'];
            $childs[] = $child['route'] . '.create';
            $childs[] = $child['route'] . '.edit';
        }
        return $childs;
    }


    public static function getAllChildren($parent)
    {
        $children = [];
        foreach ($parent->children as $child) {
            $children[] = $child;
            if ($child->children->isNotEmpty()) {
                $children = array_merge($children, self::getAllChildren($child));
            }
        }
        return $children;
    }

    public static function formatSize($bytes)
    {
        $kb = 1024;
        $mb = $kb * 1024;

        if ($bytes < $mb) {
            return round($bytes / $kb, 2) . ' KB';
        } else {
            return round($bytes / $mb, 2) . ' MB';
        }
    }

}
