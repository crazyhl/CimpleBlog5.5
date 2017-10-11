@extends('layouts.app')

@section('content')
    @if(!empty($articles))
        @foreach($articles as $article)
        <article class="articles">
            <h3><a href="{{route('article', $article->id)}}">{{$article->title}}</a></h3>
            <div class="article-info">
                发布于: {{ Carbon\Carbon::parse($article->created_at)->format('Y-m-d') }}&nbsp;&nbsp;&nbsp;
                @if($article->categories->count() > 0)
                    分类:
                    @foreach($article->categories as $category)
                    <a href="{{route('category', $category->id)}}">{{$category->title}}</a>
                    @endforeach
                    &nbsp;&nbsp;
                @endif
                @if($article->tags->count() > 0)
                    标签:
                    @foreach($article->tags as $tag)
                        <a href="{{route('tag', $tag->id)}}">{{$tag->title}}</a>&nbsp;
                    @endforeach
                @endif
            </div>
            <div class="text-muted article-content">
                @if(!empty($article->description))
                    {!! \App\Utils\Markdown::parse($article->description) !!}
                    <div class="read-more">
                        <a type="button" href="{{route('article', $article->id)}}">
                            继续阅读
                        </a>
                    </div>
                @else
                    {!! \App\Utils\Markdown::parse($article->content) !!}
                @endif
            </div>
        </article>
        @endforeach
        <div class="text-center">
        {{ $articles->links() }}
        </div>
    @endif

@endsection