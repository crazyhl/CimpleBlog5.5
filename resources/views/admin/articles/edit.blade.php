@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>
            {{$pageTitle}}
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            @include('layouts.errors')
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form" action="{{route('adminArticleUpdate', $page->id)}}" method="post">
                @include('admin.articles._form')
            </form>
        </div><!-- /.col -->
    </div>
@endsection

@section('script')
    @include('admin.upload_pic_script.upyun')
    @include('admin.selectize.pub_article_js')
@endsection

@section('style')
    @include('admin.selectize.css')
@endsection