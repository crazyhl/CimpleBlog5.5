<?php

namespace App\Http\Controllers\Admin;

use App\Models\Options;
use Illuminate\Http\Request;

class OptionController extends BaseController
{
    /**
     * 系统设置列表.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $pageTitle = '系统设置';
        $activeSidebar = 'adminOption';

        $optionsArr = Options::all();
        $options = [];
        foreach ($optionsArr as $option) {
            $options[$option['name']] = $option['value'];
        }

        return view('admin.option.index', compact('pageTitle', 'activeSidebar', 'options'));
    }

    /**
     * 保存系统设置选项.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        // BN_NO
        if ($request->post('bnNO', '')) {
            Options::updateOrCreate(
                ['name' => 'BN_NO'],
                ['value' => $request->post('bnNO', '')]
            );
        }

        // DESCRIPTION
        if ($request->post('description', '')) {
            Options::updateOrCreate(
                ['name' => 'DESCRIPTION'],
                ['value' => $request->post('description', '')]
            );
        }

        // KEYWORDS
        if ($request->post('keywords', '')) {
            Options::updateOrCreate(
                ['name' => 'KEYWORDS'],
                ['value' => $request->post('keywords', '')]
            );
        }

        // PER_PAGE
        if ($request->post('perPage', 10)) {
            Options::updateOrCreate(
                ['name' => 'PER_PAGE'],
                ['value' => $request->post('perPage', 10)]
            );
        }

        // STATISTICS
        if ($request->post('statistics', '')) {
            Options::updateOrCreate(
                ['name' => 'STATISTICS'],
                ['value' => $request->post('statistics', '')]
            );
        }

        // SUB_TITLE
        if ($request->post('subTitle', '')) {
            Options::updateOrCreate(
                ['name' => 'SUB_TITLE'],
                ['value' => $request->post('subTitle', '')]
            );
        }

        // TITLE
        if ($request->post('title', '')) {
            Options::updateOrCreate(
                ['name' => 'TITLE'],
                ['value' => $request->post('title', '')]
            );
        }

        // NEW_ARTICLES_COUNT
        if ($request->post('newArticlesCount', 0)) {
            Options::updateOrCreate(
                ['name' => 'NEW_ARTICLES_COUNT'],
                ['value' => $request->post('newArticlesCount', 0)]
            );
        }

        return redirect(route('adminOptionList'));
    }
}
