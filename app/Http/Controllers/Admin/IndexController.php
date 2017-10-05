<?php

namespace App\Http\Controllers\Admin;

class IndexController extends BaseController
{
    public function index()
    {
        $pageTitle = '仪表盘';
        $activeSidebar = 'adminHome';

        return view('admin.index.index', compact('pageTitle', 'activeSidebar'));
    }
}
