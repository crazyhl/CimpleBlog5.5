@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>
            {{$pageTitle}}
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" action="{{route('adminOptionSave')}}" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="title"> 网站标题 </label>

                    <div class="col-sm-10">
                        <input type="text" id="title" placeholder="网站标题" class="form-control" name="title"
                               value="{{$options['TITLE'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="subTitle"> 网站子标题 </label>

                    <div class="col-sm-10">
                        <input type="text" id="subTitle" placeholder="网站子标题" class="form-control" name="subTitle"
                               value="{{$options['SUB_TITLE'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="description"> 网站描述 </label>

                    <div class="col-sm-10">
                        <input type="text" id="description" placeholder="网站描述" class="form-control" name="description"
                               value="{{$options['DESCRIPTION'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="keywords"> 网站关键字 </label>

                    <div class="col-sm-10">
                        <input type="text" id="keywords" placeholder="网站关键字" class="form-control" name="keywords"
                               value="{{$options['KEYWORDS'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="bnNO"> 备案号 </label>

                    <div class="col-sm-10">
                        <input type="text" id="bnNO" placeholder="备案号" class="form-control" name="bnNO"
                               value="{{$options['BN_NO'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="perPage"> 前台分页数量 </label>

                    <div class="col-sm-10">
                        <input type="text" id="perPage" placeholder="前台分页数量" class="form-control" name="perPage"
                               value="{{$options['PER_PAGE'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="newArticlesCount"> 前台最新文章数量 </label>

                    <div class="col-sm-10">
                        <input type="text" id="newArticlesCount" placeholder="前台最新文章数量" class="form-control"
                               name="newArticlesCount"
                               value="{{$options['NEW_ARTICLES_COUNT'] or ''}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="statistics"> 统计代码 </label>

                    <div class="col-sm-10">
                        <textarea id="statistics" class="form-control" rows="8" placeholder="统计代码"
                                  name="statistics">{{$options['STATISTICS'] or ''}}</textarea>
                    </div>
                </div>

                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            保存
                        </button>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div><!-- /.col -->
    </div>
@endsection
