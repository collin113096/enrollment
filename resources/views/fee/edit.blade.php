@extends('template')
@section('title','Create Fee')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/fees">
@csrf
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Create Fee
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">

		<!-- GRADE -->
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Grade</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="grade_id">
					<option value="" hidden>Choose</option>
					@foreach($grades as $grade)
					<option value="{{ $grade->id }}" {{ $grade->id == $fee->grade_id ? 'selected':'' }}>{{ $grade->name }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<!-- PAYMENT MODE -->
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Payment Mode</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="payment_mode">
					<option value="" hidden>Choose</option>
					<option value="cash" {{ 'cash' == $fee->payment_mode ? 'selected':'' }}>Cash</option>
					<option value="installment" {{ 'installment' == $fee->payment_mode ? 'selected':'' }}>Installment</option>
				</select>
			</div>
		</div>

		<!-- REGISTRATION -->
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Registration</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="number" name="registration" value="{{ $fee->registration }}">
			</div>
		</div>

		<!-- TUITION FEE -->
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Tuition</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="number" name="tuition" value="{{ $fee->tuition }}">
			</div>
		</div>

		<!-- MISC -->
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Misc</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="number" name="misc" value="{{ $fee->misc }}">
			</div>
		</div>

		<!-- COMPUTER -->
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Computer</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="number" name="computer" value="{{ $fee->computer }}">
			</div>
		</div>

		<!-- ACTION -->
		<div class="form-group form-row">
			<div class="col-md-6 offset-md-4">	
				<button class="btn btn-primary" type="submit"><i class="fas fa-save mx-2"></i> Save</button>
				<a class="btn btn-light mr-1" href="/fees">Cancel</a>
			</div>
		</div>

	<!-- END OF CARD BODY -->
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection