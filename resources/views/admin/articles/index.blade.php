@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>
            {{$pageTitle}}
        </h1>
    </div><!-- /.page-header -->
    <p>
        <a class="btn btn-white btn-info btn-bold" href="{{route('adminArticleCreate')}}">
            <i class="ace-icon fa fa-plus-square-o bigger-120 blue"></i>
            新增
        </a>
    </p>
    <table id="simple-table" class="table  table-bordered table-hover">
        <thead>
        <tr>
            <th>名称</th>
            <th>排序</th>
            <th>允许评论</th>
            <th>状态</th>
            <th>创建日期</th>
            <th>修改日期</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>
                    <a href="{{route('adminArticleEdit', [$page->id])}}">{{$page->title}}</a>
                </td>
                <td>{{$page->order}}</td>
                <td>
                    @if ($page->isAllowComment === 1)
                        <span class="green">是</span>
                    @else
                        <span class="purple">否</span>
                    @endif
                </td>
                <td>
                    @if ($page->status === 1)
                        <span class="green">是</span>
                    @else
                        <span class="purple">否</span>
                    @endif
                </td>
                <td>{{$page->created_at}}</td>
                <td>{{$page->updated_at}}</td>
                <td>
                    <div class="hidden-sm hidden-xs btn-group">
                        <a class="btn btn-xs btn-info" href="{{route('adminArticleEdit', [$page->id])}}">
                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <a class="btn btn-xs btn-danger" href="{{route('adminArticleDelete', [$page->id])}}">
                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </a>
                    </div>

                    <div class="hidden-md hidden-lg">
                        <div class="inline pos-rel">
                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"
                                    data-position="auto">
                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                <li>
                                    <a href="{{route('adminArticleEdit', [$page->id])}}" class="tooltip-success"
                                       data-rel="tooltip" title="Edit">
                                    <span class="green">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('adminArticleDelete', [$page->id])}}" class="tooltip-error"
                                       data-rel="tooltip" title="Delete">
                                    <span class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $pages->links() }}
@endsection
