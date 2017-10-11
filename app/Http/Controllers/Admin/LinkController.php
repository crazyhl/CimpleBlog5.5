<?php

namespace App\Http\Controllers\Admin;

use App\Models\Links;
use App\Http\Requests\StoreLink;

/**
 * 链接控制器
 * Class LinkController.
 */
class LinkController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        view()->share('activeSidebar', 'adminLink');
    }

    /**
     * 链接列表.
     */
    public function index()
    {
        $pageTitle = '链接列表';
        $links = Links::orderBy('id', 'desc')->paginate($this->perPageCount);

        return view('admin.link.index', compact('pageTitle', 'links'));
    }

    /**
     * 新增链接.
     */
    public function create()
    {
        $pageTitle = '新增链接';

        return view('admin.link.create', compact('pageTitle'));
    }

    /**
     * 保存新增链接.
     * @param StoreLink $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(StoreLink $request)
    {
        $link = new Links();
        $link->title = $request->title;
        $link->description = $request->description;
        $link->url = $request->url;
        $link->save();

        return redirect(route('adminLinkList'));
    }

    /**
     * 编辑链接.
     * @param Links $link
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Links $link)
    {
        $pageTitle = '编辑链接';

        return view('admin.link.edit', compact('pageTitle', 'link'));
    }

    /**
     * 保存编辑链接.
     * @param StoreLink $request
     * @param Links $link
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreLink $request, Links $link)
    {
        $link->title = $request->title;
        $link->description = $request->description;
        $link->url = $request->url;
        $link->save();

        return redirect(route('adminLinkList'));
    }

    public function delete(Links $link)
    {
        $link->delete();

        return redirect(route('adminLinkList'));
    }
}
