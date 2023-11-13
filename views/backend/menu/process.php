<?php

namespace App\Libraries;

class  MessageArt
{
    protected static $flashMessages = [];

    public static function set_flash($key, $value)
    {
        self::$flashMessages[$key] = $value;
    }

    public static function get_flash($key)
    {
        if (isset(self::$flashMessages[$key])) {
            $value = self::$flashMessages[$key];
            unset(self::$flashMessages[$key]);
            return $value;
        }
        return null;
    }
}

use App\Models\Menu;
use App\Models\Category;
use App\Libaries\MyClass;
use App\Models\Brand;
use App\Models\Post;
use App\Models\Topic;

if (isset($_POST['THEMCATEGORY'])) {
    $listid = $_POST['categoryId'];

    foreach ($listid as $id) {
        $category = Category::find($id);

        $menu = new Menu;
        $menu->name = $category->name;
        $menu->link = 'index.php?option=product&cat=' . $category->slug;
        $menu->type = 'category';
        $menu->table_id = $category->id;
        $menu->sort_order = 1;
        $menu->status = 2;
        $menu->position = $_POST['position'];
        $menu->parent_id = 0;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = 1;
        $menu->save();
    }
    MessageArt::set_flash('message', ['type' => 'success', 'msg' => 'Menu tùy chỉnh đã được thêm thành công']);
    header('location:index.php?option=menu');
}


if (isset($_POST['THEMBRAND'])) {
    $listid = $_POST['brandId'];

    foreach ($listid as $id) {
        $brand = Brand::find($id);

        $menu = new Menu;
        $menu->name = $brand->name;
        $menu->link = 'index.php?option=brand&cat=' . $brand->slug;
        $menu->type = 'brand';
        $menu->table_id = $brand->id;
        $menu->sort_order = 1;
        $menu->status = 2;
        $menu->position = $_POST['position'];
        $menu->parent_id = 0;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = 1;
        $menu->save();
    }
    MessageArt::set_flash('message', ['type' => 'success', 'msg' => 'Menu tùy chỉnh đã được thêm thành công']);
    header('location:index.php?option=menu');
}

if (isset($_POST['THEMTOPIC'])) {
    $listid = $_POST['topicId'];

    foreach ($listid as $id) {
        $topic = Topic::find($id);

        $menu = new Menu;
        $menu->name = $topic->name;
        $menu->link = 'index.php?option=post&cat=' . $topic->slug;
        $menu->type = 'topic';
        $menu->table_id = $topic->id;
        $menu->sort_order = 1;
        $menu->status = 2;
        $menu->position = $_POST['position'];
        $menu->parent_id = 0;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = 1;
        $menu->save();
    }
    MessageArt::set_flash('message', ['type' => 'success', 'msg' => 'Menu tùy chỉnh đã được thêm thành công']);
    header('location:index.php?option=menu');
}
if (isset($_POST['THEMPAGE'])) {
    $listid = $_POST['postId'];
    foreach ($listid as $id) {
        $page = Post::find($id);
        if ($page) {
            $menu = new Menu;
            $menu->name = $page->title;
            $menu->link = 'index.php?option=page&cat=' . $page->slug;
            $menu->type = 'page';
            $menu->table_id = $page->id;
            $menu->sort_order = 1;
            $menu->status = 2;
            $menu->position = $_POST['position'];
            $menu->parent_id = 0;
            $menu->created_at = date('Y-m-d H:i:s');
            $menu->created_by = 1;
            $menu->save();
            MessageArt::set_flash('message', ['type' => 'success', 'msg' => 'Menu tùy chỉnh đã được thêm thành công']);
            header('location: index.php?option=menu');
        }
    }
}


if (isset($_POST['THEMCUSTOM'])) {
    if (isset($_POST['name'], $_POST['link'])) {
        $menu = new Menu;
        $menu->name = $_POST['name'];
        $menu->link = $_POST['link'];
        $menu->type = 'custom';
        $menu->sort_order = 1;
        $menu->status = 2;
        $menu->position = $_POST['position'];
        $menu->parent_id = 0;
        $menu->created_at = date('Y-m-d H:i:s');
        $menu->created_by = 1;
        $menu->save();
        MessageArt::set_flash('message', ['type' => 'success', 'msg' => 'Menu tùy chỉnh đã được thêm thành công']);
        header('location: index.php?option=menu');
    }
}
