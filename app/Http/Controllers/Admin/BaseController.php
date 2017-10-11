<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $returnValueArr = [];
    /**
     * 后台的分页每页数量.
     * @var int
     */
    protected $perPageCount = 10;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
