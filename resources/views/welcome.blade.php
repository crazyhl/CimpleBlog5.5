<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css" />
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12 hidden-xs header-title">
                <h1 ><span style="color:#F44336;">M1racle's</span> Blog</h1>
                <h4>php初心者</h4>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs-inline" href="/"><span style="color:#F44336;">M1racle's</span> Blog</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页</a></li>
                        <li><a href="#">关于我</a></li>
                        <li><a href="#">我的书单</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <h1 ><span style="color:#F44336;">M1racle's</span> Blog</h1>
                    <h4>php初心者</h4>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <h1 ><span style="color:#F44336;">M1racle's</span> Blog</h1>
                    <h4>php初心者</h4>
                </div>
            </div>
        </div>
    </body>
</html>
