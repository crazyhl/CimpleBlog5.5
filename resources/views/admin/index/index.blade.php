@extends('layouts.admin')

@section('content')
    <div class="infobox-container">
        <div class="infobox infobox-green">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-file-text"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">{{$articleNormalCount}}</span>
                <div class="infobox-content">文章数</div>
            </div>

            {{--<div class="stat stat-success">8%</div>--}}
        </div>

        <div class="infobox infobox-pink">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-file"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">{{$articleDraftCount}}</span>
                <div class="infobox-content">草稿数</div>
            </div>
            {{--<div class="stat stat-important">4%</div>--}}
        </div>

        <div class="infobox infobox-blue">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-list-ul"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">{{$categoryCount}}</span>
                <div class="infobox-content">分类数量</div>
            </div>

            {{--<div class="badge badge-success">--}}
                {{--+32%--}}
                {{--<i class="ace-icon fa fa-arrow-up"></i>--}}
            {{--</div>--}}
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-tags"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">{{$tagCount}}</span>
                <div class="infobox-content">标签数</div>
            </div>
        </div>

        {{--<div class="infobox infobox-orange2">--}}
            {{--<div class="infobox-chart">--}}
                {{--<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>--}}
            {{--</div>--}}

            {{--<div class="infobox-data">--}}
                {{--<span class="infobox-data-number">6,251</span>--}}
                {{--<div class="infobox-content">pageviews</div>--}}
            {{--</div>--}}

            {{--<div class="badge badge-success">--}}
                {{--7.2%--}}
                {{--<i class="ace-icon fa fa-arrow-up"></i>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection
