<div class="form-group form-row">
	<label class="col-md-4 text-md-right col-form-label"><strong>{{ $label }}</strong></label>
	<div class="col-md-6">
		<select class="custom-select" name="{{ $name }}">
			<option value="" hidden>Choose</option>
			@if(@isset($fee))
				@foreach($collection as $item)
				<option value="{{ $item['id'] }}" {{ $item['id'] == $fee->grade_id ? 'selected':'' }}>{{ $item['name'] }}</option>
				@endforeach
			@elseif(@isset($modes))
				@foreach($collection as $item)
				<option value="{{ $item['id'] }}" {{ $item['id'] == $modes->payment_mode ? 'selected':'' }}>{{ $item['name'] }}</option>
				@endforeach
			@else
				@foreach($collection as $item)
				<option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
				@endforeach
			@endif
		</select>
	</div>
</div>