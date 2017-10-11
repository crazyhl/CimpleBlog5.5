<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{$options['KEYWORDS'] or ''}}">
    <meta name="description" content="{{$options['DESCRIPTION'] or ''}}">

    <title>{{$pageTitle or '首页'}} - Cimple Blog</title>
    <link rel="stylesheet" href="/css/app.css" />
    <script type="text/javascript" src="/js/app.js"></script>
</head>
<body>
<div class="row blog-header">
    <div class="col-sm-12 hidden-xs header-title">
        <h1 >{!! $options['TITLE'] !!}</h1>
        <h4>{{$options['SUB_TITLE']}}</h4>
    </div>
</div>
@include('layouts._index-navbar')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            @yield('content')
        </div>
        <div class="col-md-4 hidden-sm hidden-xs">
            @include('layouts._index-sidebar')
        </div>
    </div>
</div>
<footer class="blog-footer">
    <p>Cimple Blog &copy;2016-2107 <a href="http://www.miitbeian.gov.cn/" target="_blank">{{$options['BN_NO']}}</a>{!! $options['STATISTICS'] !!}</p>
</footer>
</body>
</html>
