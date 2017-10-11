<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Pages;
use App\Models\Tags;

class PageController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        view()->share('activeNav', 'home');
    }

    public function article(Pages $page)
    {
        $pageTitle = $page->title;
        return view('index.pages.article', compact('page', 'pageTitle'));
    }

    public function page(Pages $page)
    {
        $pageTitle = $page->title;
        $activeNav = 'page-' . $page->id;

        return view('index.pages.article', compact('page', 'pageTitle', 'activeNav'));
    }
}
