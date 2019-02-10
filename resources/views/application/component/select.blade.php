<div class="form-group form-row">			
		<label class="col-md-4 font-weight-bold text-md-right col-form-label ">{{ $label }}</label>			
		<div class="col-md-6">
			<select 
				class="custom-select {{ $error }}" 
				name="{{ $name }}"
			>
				<option value="" hidden>Choose</option>
				{{ $slot }}
			</select>
		</div>
</div>