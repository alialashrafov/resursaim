<div class="form-group">
    <label for="exampleTextInput2"
           class="col-sm-1 control-label">{{ $title }}</label>
    <div class="col-sm-11">
        <input type="text" name="{{ $name }}"
               value="{{ old($name, $value) }}"
               class="form-control" id="exampleTextInput2"
               placeholder="{{ $title }}">
    </div>
</div>
