<?php
class Route
{
    public static function route_site()
    {
        $pathview = "views/frontend/";

        if (isset($_REQUEST["option"])) {
            $option = $_REQUEST["option"];
            $pathview .= $option;

            if (isset($_REQUEST["slug"])) {
                $pathview .= "-detail.php";
            } else {
                if (isset($_REQUEST["cat"])) {
                    $pathview .= "-category.php";
                } else {
                    $pathview .= ".php";
                }
            }
        } else {
            require_once "views/frontend/home.php";
        }
    }

    public static function route_admin()
    {
        $pathview = "../views/backend/";
        if (isset($_REQUEST['option'])) {
            $option = $_REQUEST['option'];
            $pathview .= $option . "/";
            if (isset($_REQUEST['category'])) {
                $category = $_REQUEST['category'];
                $pathview .= $category . ".php";
            } else {
                $pathview .= "index.php";
            }
        } else {
            $pathview .= "dashboard/index.php";
        }
        require_once $pathview;
    }
}
