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
            <a class="navbar-brand visible-xs-inline" href="/">{!! $options['TITLE'] !!}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if($activeNav == 'home')class="active"@endif><a href="{{route('home')}}">首页</a></li>
                @if(!empty($pages))
                    @foreach($pages as $page)
                    <li @if($activeNav == 'page-' . $page->id)class="active"@endif><a href="{{route('page', $page->id)}}">{{$page->title}}</a></li>
                    @endforeach
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>