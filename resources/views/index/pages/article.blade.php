@extends('layouts.app')

@section('content')
    @if(!empty($page))
        <article class="articles">
            <h3>{{$page->title}}</h3>
            <div class="article-info">
                发布于: {{ Carbon\Carbon::parse($page->created_at)->format('Y-m-d') }}&nbsp;&nbsp;&nbsp;
                @if($page->categories->count() > 0)
                    分类:
                    @foreach($page->categories as $category)
                        <a href="{{route('category', $category->id)}}">{{$category->title}}</a>
                    @endforeach
                    &nbsp;&nbsp;
                @endif
                @if($page->tags->count() > 0)
                    标签:
                    @foreach($page->tags as $tag)
                        <a href="{{route('tag', $tag->id)}}">{{$tag->title}}</a>&nbsp;
                    @endforeach
                @endif
            </div>
            <div class="text-muted article-content">
                {!! \App\Utils\Markdown::parse($page->content) !!}
            </div>
        </article>
        @include('layouts._index-comment')
    @endif

@endsection