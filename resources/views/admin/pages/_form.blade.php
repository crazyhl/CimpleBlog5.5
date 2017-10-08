<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="title"> 标题 </label>

    <div class="col-sm-10">
        <input type="text" id="title" placeholder="链接标题" class="form-control" name="title"
               value="{{$page->title or ''}}"/>
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
        <label class="col-sm-2 control-label no-padding-right" for="cagetory"> 分类 </label>

        <div class="col-sm-10">
            <select class="form-control" id="cagetory" name="cagetory">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if(!empty($page) && in_array($category->id, $page->categories->pluck('id')->toArray()))
                            selected
                            @endif
                    >{{$category->title}}
                        @foreach($page->categories() as $cate)
                            {{$cate->title}}
                            @endforeach
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
                  name="content">{{$page->content or ''}}</textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="order"> 排序 </label>

    <div class="col-sm-10">
        <input type="text" id="order" placeholder="排序" class="form-control" name="order"
               value="{{$page->order or '0'}}"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right"> </label>

    <div class="col-sm-10">
        <div class="checkbox">
            <label style="padding-left: 10px;">
                <input name="isAllowComment" type="checkbox" class="ace" value="1"
                       @if(empty($page) ||$page->isAllowComment == 1)
                       checked
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
                    <input name="isTop" type="checkbox" class="ace" value="1"/>
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
                   @if(empty($page) ||$page->status == 1)
                   checked
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