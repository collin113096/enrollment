<div class="form-group form-row">			
	<label class="col-md-4 font-weight-bold text-md-right col-form-label">{{ $label }}</label>			
	<div class="col-md-6">
		<input 
			class="form-control {{ $error }}" 
			type="date" 
			name="{{ $name }}" 
			value="{{ $value }}"
		>
	</div>
</div>