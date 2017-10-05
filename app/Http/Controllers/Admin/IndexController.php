<?php

namespace App\Http\Controllers\Admin;

class IndexController extends BaseController
{
    public function index()
    {
        $pageTitle = '仪表盘';
        return view('admin.index.index', compact('pageTitle'));
    }
}
