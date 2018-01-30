<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="control-label">Product Name</label>
    {{ Form::text('name', old('name'), ['class' => 'form-control']) }}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    <label for="price" class="control-label">Price (Kyats)</label>
    {{ Form::text('price', old('price'), ['class' => 'form-control']) }}
    @if ($errors->has('price'))
        <span class="help-block">
            <strong>{{ $errors->first('price') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
    <label for="quantity" class="control-label">Quantity</label>
    {{ Form::text('quantity', old('quantity'), ['class' => 'form-control']) }}
    @if ($errors->has('quantity'))
        <span class="help-block">
            <strong>{{ $errors->first('quantity') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="control-label">Description</label>
    {{ Form::textarea('description', old('description'), ['class' => 'form-control']) }}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>