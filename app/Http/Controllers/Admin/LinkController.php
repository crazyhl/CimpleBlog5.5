<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreLink;
use App\Models\Links;

/**
 * 链接控制器
 * Class LinkController
 * @package App\Http\Controllers\Admin
 */
class LinkController extends BaseController
{
    /**
     * 链接列表
     */
    public function index()
    {
        $pageTitle = '链接列表';
        $activeSidebar = 'adminLink';
        $links = Links::paginate($this->perPageCount);

        return view('admin.link.index', compact('pageTitle', 'activeSidebar', 'links'));
    }

    /**
     * 新增链接
     */
    public function create()
    {
        $pageTitle = '新增链接';
        $activeSidebar = 'adminLink';

        return view('admin.link.create', compact('pageTitle', 'activeSidebar'));
    }

    /**
     * 保存新增链接
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
     * 编辑链接
     * @param Links $link
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Links $link)
    {
        $pageTitle = '编辑链接';
        $activeSidebar = 'adminLink';

        return view('admin.link.edit', compact('pageTitle', 'activeSidebar', 'link'));
    }


    /**
     * 保存编辑链接
     * @param StoreLink $request
     * @param Links $link
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreLink $request, Links $link) {
        $link->title = $request->title;
        $link->description = $request->description;
        $link->url = $request->url;
        $link->save();

        return redirect(route('adminLinkList'));
    }

    public function delete(Links $link) {
        $link->delete();

        return redirect(route('adminLinkList'));
    }
}