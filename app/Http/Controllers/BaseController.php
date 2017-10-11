<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Links;
use App\Models\Options;
use App\Models\Pages;
use App\Models\Tags;

class BaseController extends Controller
{
    protected $perPage = 10;

    public function __construct()
    {
        $newestArticles = Pages::articles()->with('tags', 'categories')->where('status', 1)->limit(10)->get();
        $tags = Tags::with('pages')->get();
        $categories = Categories::with('pages')->get();
        $pages = Pages::pages()->where('status', 1)->get();
        $optionsArr = Options::all();
        $options = [];
        foreach ($optionsArr as $option) {
            $options[$option['name']] = $option['value'];
        }
        $links = Links::all();

        if ($options && $options['PER_PAGE']) {
            $this->perPage = $options['PER_PAGE'] ?? 10;
        }


        view()->share('newestArticles', $newestArticles);
        view()->share('tags', $tags);
        view()->share('categories', $categories);
        view()->share('pages', $pages);
        view()->share('options', $options);
        view()->share('links', $links);
    }
}
