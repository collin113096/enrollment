<div class="form-group form-row">
	<label class="col-md-4 text-md-right col-form-label"><strong>{{ $label }}</strong></label>
	<div class="col-md-6">
		<select class="custom-select" name="{{ $name }}">
			<option value="" hidden>Choose</option>		
				{{ $slot }}
		</select>
	</div>
</div>