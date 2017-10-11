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
        Options::updateOrCreate(
            ['name' => 'BN_NO'],
            ['value' => $request->bnNO]
        );
        // DESCRIPTION
        Options::updateOrCreate(
            ['name' => 'DESCRIPTION'],
            ['value' => $request->description]
        );
        // KEYWORDS
        Options::updateOrCreate(
            ['name' => 'KEYWORDS'],
            ['value' => $request->keywords]
        );
        // PER_PAGE
        Options::updateOrCreate(
            ['name' => 'PER_PAGE'],
            ['value' => $request->perPage]
        );
        // STATISTICS
        Options::updateOrCreate(
            ['name' => 'STATISTICS'],
            ['value' => $request->statistics]
        );
        // SUB_TITLE
        Options::updateOrCreate(
            ['name' => 'SUB_TITLE'],
            ['value' => $request->subTitle]
        );
        // TITLE
        Options::updateOrCreate(
            ['name' => 'TITLE'],
            ['value' => $request->title]
        );
        // NEW_ARTICLES_COUNT
        Options::updateOrCreate(
            ['name' => 'NEW_ARTICLES_COUNT'],
            ['value' => $request->newArticlesCount]
        );

        // NEW_ARTICLES_COUNT
        Options::updateOrCreate(
            ['name' => 'COMMENT_CODE'],
            ['value' => $request->commentCode]
        );

        return redirect(route('adminOptionList'));
    }
}
