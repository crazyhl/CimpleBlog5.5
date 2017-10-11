<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tags;
use App\Models\Pages;
use App\Models\Categories;

class IndexController extends BaseController
{
    public function index()
    {
        $pageTitle = '仪表盘';
        $activeSidebar = 'adminHome';
        $articleNormalCount = Pages::articles()->where('status', 1)->count();
        $articleDraftCount = Pages::articles()->where('status', 0)->count();
        $tagCount = Tags::count();
        $categoryCount = Categories::count();

        return view('admin.index.index', compact('pageTitle', 'activeSidebar', 'articleNormalCount', 'articleDraftCount', 'tagCount', 'categoryCount'));
    }
}
