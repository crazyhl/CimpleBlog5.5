<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="title"> 标题 </label>

    <div class="col-sm-10">
        <input type="text" id="title" placeholder="链接标题" class="form-control" name="title"
               value="{{$page->title or old('title')}}"/>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right"> 上传图片 </label>

    <div class="col-sm-10">
        <div id="picContainer">
            <button id="pickfiles" class="btn btn-primary" type="button">
                <i class="ace-icon fa fa-cloud-upload bigger-120"></i>
                选择图片
            </button>
            <div id="picFilelist"
                 style="margin-top:16px; border: 1px solid cornflowerblue; border-radius: 5px; padding: 4px;">
                已上传列表：
                <pre id="console"></pre>
            </div>
        </div>
    </div>
</div>
@if ($isArticle === true)
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="categories[]"> 分类 </label>

        <div class="col-sm-10">
            <select class="form-control" id="categories" name="categories[]" multiple="multiple">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if(empty(old('categories[]')) && !empty($page) && in_array($category->id, $page->categories->pluck('id')->toArray()))
                            selected
                            @endif
                            @if(!empty(old('categories[]')) && in_array($category->id, old('categories[]')))
                            selected
                            @endif
                    >{{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="tags"> 标签 </label>

        <div class="col-sm-10">
            <select class="form-control" id="tags" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->title}}"
                            @if(empty(old('tags[]')) && !empty($page) && in_array($tag->id, $page->tags->pluck('id')->toArray()))
                            selected
                            @endif
                            @if(!empty(old('tags[]')) && in_array($category->id, old('tags[]')))
                            selected
                            @endif
                    >{{$tag->title}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
@endif

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="content"> 内容 </label>

    <div class="col-sm-10">
        <textarea id="content" class="form-control" rows="20" placeholder=""
                  name="content">{{$page->content or old('content')}}</textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="order"> 排序 </label>

    <div class="col-sm-10">
        <input type="text" id="order" placeholder="排序" class="form-control" name="order"
               value="{{$page->order or 0}}"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right"> </label>

    <div class="col-sm-10">
        <div class="checkbox">
            <label style="padding-left: 10px;">
                <input name="isAllowComment" type="checkbox" class="ace" value="1"
                       @if(empty(old('isAllowComment')) && (empty($page) ||$page->isAllowComment == 1))
                       checked
                       @endif
                       @if(!empty(old('isAllowComment')) && old('isAllowComment') == 1)
                       selected
                        @endif
                />
                <span class="lbl"> 是否允许评论</span>
            </label>
        </div>
    </div>
</div>

@if ($isArticle === true)
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right"> </label>

        <div class="col-sm-10">
            <div class="checkbox">
                <label style="padding-left: 10px;">
                    <input name="isTop" type="checkbox" class="ace" value="1"
                           @if(empty(old('isTop')) && (empty($page) ||$page->isTop == 1))
                           checked
                           @endif
                           @if(!empty(old('isTop')) && old('isTop') == 1)
                           selected
                            @endif
                    />
                    <span class="lbl"> 置顶 </span>
                </label>
            </div>
        </div>
    </div>
@endif

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right">  </label>

    <div class="col-sm-10">
        <label>
            <input name="status" type="radio" class="ace" value="1"
                   @if(empty(old('status')) && (empty($page) ||$page->status == 1))
                   checked
                   @endif
                   @if(!empty(old('status')) && old('status') == 1)
                   selected
                    @endif
            /><span class="lbl"> 发布</span>
        </label>
        <label>
            <input name="status" type="radio" class="ace" value="0"
                   @if(!empty($page) && $page->status == 0)
                   checked
                    @endif
            /><span class="lbl"> 草稿</span>
        </label>
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