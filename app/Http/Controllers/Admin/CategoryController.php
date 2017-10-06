<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use App\Http\Requests\StoreCategory;

/**
 * 分类管理
 * Class CategoryController.
 */
class CategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->returnValueArr['activeSidebar'] = 'adminCategory';
    }

    public function index()
    {
        $pageTitle = '分类列表';
        $categories = Categories::with('pages')->orderBy('order', 'desc')->orderBy('id', 'asc')->paginate($this->perPageCount);

        $this->returnValueArr += compact('pageTitle', 'categories');

        return view('admin.category.index', $this->returnValueArr);
    }

    /**
     * 新增链接.
     */
    public function create()
    {
        $pageTitle = '新增分类';

        $this->returnValueArr += compact('pageTitle');

        return view('admin.category.create', $this->returnValueArr);
    }

    /**
     * 保存新增链接.
     * @param StoreCategory $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(StoreCategory $request)
    {
        $category = new Categories();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->order = $request->order;
        $category->save();

        return redirect(route('adminCategoryList'));
    }

    /**
     * 编辑链接.
     * @param Categories $link
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Categories $category)
    {
        $pageTitle = '编辑分类';

        $this->returnValueArr += compact('pageTitle', 'category');

        return view('admin.category.edit', $this->returnValueArr);
    }

    /**
     * 保存编辑链接.
     * @param StoreCategory $request
     * @param Categories $link
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreCategory $request, Categories $category)
    {
        $category->title = $request->title;
        $category->description = $request->description;
        $category->order = $request->order;
        $category->save();

        return redirect(route('adminCategoryList'));
    }

    public function delete(Categories $category)
    {
        $category->delete();

        return redirect(route('adminCategoryList'));
    }
}
