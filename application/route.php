<?php

namespace Src;

class Route
{
    public static function route_site()
    {
        if (isset($_REQUEST['option'])) {
            if (isset($_REQUEST['slug'])) {
                echo 'chi tiết';
            } else {
                if (isset($_REQUEST['cat'])) {
                    echo "loại";
                } else {
                    echo "tất cả";
                }
            }
        } else {
            echo "trang chủ";
        }
    }
}