<div class="form-group form-row">
	<label class="col-md-4 text-md-right col-form-label"><strong>{{ $label }}</strong></label>
	<div class="col-md-6">
		<input class="form-control" list='list' name="{{ $name }}" value="{{ $value }}" required>
		<datalist id="list">
			@foreach($options as $option)
			<option value="{{ $option['name'] }}">
			@endforeach
		</datalist>
	</div>
</div>