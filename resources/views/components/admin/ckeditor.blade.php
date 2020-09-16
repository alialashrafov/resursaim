<div class="form-group">
    <label for="{{ $name }}" class="col-sm-1 control-label">{{ $title }}:</label>
    <div class="col-sm-11">
    <textarea name="{{ $name }}" class="form-control" placeholder="{{ $title }}" >{{ old($name, $value) }}</textarea>
    </div>
</div>