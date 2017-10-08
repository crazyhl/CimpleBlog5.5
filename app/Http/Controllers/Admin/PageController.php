<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePage;
use App\Models\Categories;
use App\Models\Pages;
use App\Utils\UPYun;

class PageController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->returnValueArr['activeSidebar'] = 'adminPage';
    }

    /**
     * 链接列表.
     */
    public function index()
    {
        $pageTitle = '页面列表';
        $pages = Pages::pages()->paginate($this->perPageCount);

        $this->returnValueArr += compact('pageTitle', 'pages');

        return view('admin.pages.index', $this->returnValueArr);
    }

    /**
     * 新增页面.
     */
    public function create()
    {
        $pageTitle = '新增页面';
        $isArticle = false;

        $upYunParameters = UPYun::getUploadImageParams();

        $this->returnValueArr += compact('pageTitle', 'isArticle', 'upYunParameters');

        return view('admin.pages.create', $this->returnValueArr);
    }

    /**
     * 保存新增链接.
     * @param StorePage $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(StorePage $request)
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
     * 编辑页面.
     * @param Pages $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Pages $page)
    {
        $pageTitle = '编辑页面';
        $isArticle = false;
        $upYunParameters = UPYun::getUploadImageParams();

        $this->returnValueArr += compact('pageTitle', 'page', 'isArticle', 'upYunParameters');

        return view('admin.pages.edit', $this->returnValueArr);
    }

    /**
     * 保存编辑页面
     * @param StorePage $request
     * @param Pages $page
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StorePage $request, Pages $page)
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
     * 删除页面
     * @param Pages $page
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Pages $page)
    {
        $page->delete();

        return redirect(route('adminPageList'));
    }
}
