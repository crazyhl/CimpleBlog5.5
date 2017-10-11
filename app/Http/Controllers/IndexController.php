<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Pages;
use App\Models\Tags;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index()
    {
        $pageTitle = '首页';
        $activeNav = 'home';
        $articles = Pages::articles()->with('tags', 'categories')->where('status', 1)->paginate($this->perPage);
//        dd($articles);
        return view('index.index.index', compact('pageTitle', 'activeNav', 'articles'));
    }

    public function category(Categories $category)
    {
        $pageTitle = $category->title;
        $activeNav = 'home';
        $articles = $category->pages()->articles()->with('tags', 'categories')->where('status', 1)->paginate($this->perPage);;
        return view('index.index.index', compact('pageTitle', 'activeNav', 'articles'));
    }

    public function tag(Tags $tag)
    {
        $pageTitle = $tag->title;
        $activeNav = 'home';
        $articles = $tag->pages()->articles()->with('tags', 'categories')->where('status', 1)->paginate($this->perPage);;
        return view('index.index.index', compact('pageTitle', 'activeNav', 'articles'));
    }
}
