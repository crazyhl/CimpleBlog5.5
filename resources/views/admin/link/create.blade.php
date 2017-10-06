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
            <form class="form-horizontal" role="form" action="{{route('adminLinkCreate')}}" method="post">
                @include('admin.link._form')
            </form>
        </div><!-- /.col -->
    </div>
@endsection
