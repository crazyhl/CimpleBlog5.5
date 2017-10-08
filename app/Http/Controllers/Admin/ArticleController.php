<?php

namespace App\Http\Controllers\Admin;

use App\Utils\UPYun;
use App\Models\Pages;
use App\Models\Categories;
use App\Http\Requests\StoreArticle;

class ArticleController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->returnValueArr['activeSidebar'] = 'adminArticle';
    }

    /**
     * 链接列表.
     */
    public function index()
    {
        $pageTitle = '文章列表';
        $pages = Pages::articles()->paginate($this->perPageCount);

        $this->returnValueArr += compact('pageTitle', 'pages');

        return view('admin.articles.index', $this->returnValueArr);
    }

    /**
     * 新增文章.
     */
    public function create()
    {
        $pageTitle = '新增文章';
        $isArticle = true;

        $upYunParameters = UPYun::getUploadImageParams();
        $categories = Categories::orderBy('order', 'desc')->orderBy('id', 'asc')->get();

        $this->returnValueArr += compact('pageTitle', 'isArticle', 'upYunParameters', 'categories');

        return view('admin.articles.create', $this->returnValueArr);
    }

    /**
     * 保存新增文章.
     * @param StoreArticle $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(StoreArticle $request)
    {
        $page = new Pages();
        $page->title = $request->title;
        $page->content = $request->post('content');
        $page->type = 2;
        $page->order = $request->order;
        $page->isTop = 0;
        $page->isAllowComment = $request->post('isAllowComment', 0);
        $page->status = $request->status;

        $page->save();

        return redirect(route('adminPageList'));
    }

    /**
     * 编辑文章.
     * @param Pages $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Pages $page)
    {
        $pageTitle = '编辑文章';
        $isArticle = true;
        $upYunParameters = UPYun::getUploadImageParams();
        $categories = Categories::orderBy('order', 'desc')->orderBy('id', 'asc')->get();

        $this->returnValueArr += compact('pageTitle', 'page', 'isArticle', 'upYunParameters', 'categories');

        return view('admin.articles.edit', $this->returnValueArr);
    }

    /**
     * 保存编辑文章.
     * @param StoreArticle $request
     * @param Pages $page
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreArticle $request, Pages $page)
    {
        $page->title = $request->title;
        $page->content = $request->post('content');
        $page->order = $request->order;
        $page->isAllowComment = $request->post('isAllowComment', 0);
        $page->status = $request->status;

        $page->save();

        return redirect(route('adminPageList'));
    }

    /**
     * 删除文章.
     * @param Pages $page
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Pages $page)
    {
        $page->delete();

        return redirect(route('adminPageList'));
    }
}
