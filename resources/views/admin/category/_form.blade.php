<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="title"> 标题 </label>

    <div class="col-sm-10">
        <input type="text" id="title" placeholder="分类标题" class="form-control" name="title" value="{{$category->title or ''}}"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="description"> 描述 </label>

    <div class="col-sm-10">
        <textarea id="description" class="form-control" rows="8" placeholder="分类描述"
                  name="description">{{$category->description or ''}}</textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="order"> 排序 </label>

    <div class="col-sm-10">
        <input type="text" id="order" placeholder="排序" class="form-control" name="order" value="{{$category->order or old('order', 0)}}"/>
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