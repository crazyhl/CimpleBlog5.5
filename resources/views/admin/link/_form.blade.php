<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="title"> 标题 </label>

    <div class="col-sm-10">
        <input type="text" id="title" placeholder="链接标题" class="form-control" name="title" value="{{$link->title or ''}}"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="description"> 描述 </label>

    <div class="col-sm-10">
        <input type="text" id="description" placeholder="链接描述" class="form-control" name="description" value="{{$link->description or ''}}"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="url"> url </label>

    <div class="col-sm-10">
        <input type="text" id="url" placeholder="链接地址" class="form-control" name="url" value="{{$link->url or ''}}"/>
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