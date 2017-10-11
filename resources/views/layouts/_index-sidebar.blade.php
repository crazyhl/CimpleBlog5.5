@if(!empty($newestArticles))
<section class="side-bar">
    <div class="side-bar-header h4">
        最新文章
    </div>
    <div class="side-bar-body">
        <ul>
            @foreach($newestArticles as $article)
            <li><a>{{$article->title}}</a></li>
            @endforeach
        </ul>
    </div>
</section>
@endif

@if(!empty($categories))
<section class="side-bar">
    <div class="side-bar-header h4">
        分类
    </div>
    <div class="side-bar-body">
        <ul>
            @foreach($categories as $category)
                <li><a href="{{route('category', $category->id)}}">{{$category->title}}<small>({{$category->pages->count()}})</small></a></li>
            @endforeach
        </ul>
    </div>
</section>
@endif

@if(!empty($tags))
<section class="side-bar">
    <div class="side-bar-header h4">
        标签
    </div>
    <div class="side-bar-body">
        @foreach($tags as $tag)
            <a href="{{route('tag', $tag->id)}}">{{$tag->title}}<small>({{$tag->pages->count()}})</small></a>&nbsp;&nbsp;&nbsp;
        @endforeach
    </div>
</section>
@endif

@if(!empty($links))
    <section class="side-bar">
        <div class="side-bar-header h4">
            链接
        </div>
        <div class="side-bar-body">
            <ul>
                @foreach($links as $link)
                    <li><a href="{{$link->url}}" title="{{$link->description}}" target="_blank">{{$link->title}}<small></a></li>
                @endforeach
            </ul>
        </div>
    </section>
@endif