@extends('template')
@section('title','Edit Time')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/times/{{ $time->id }}">
@csrf
@method('PATCH')
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Edit Time
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">

		<!-- TIME IN -->
		<div class="form-group">
			<label><strong>Time In</strong></label>
			<input class="form-control" type="time" name="in" value="{{ $time->in }}">
		</div>

		<!-- TIME OUT -->
		<div class="form-group">
			<label><strong>Time Out</strong></label>
			<input class="form-control" type="time" name="out" value="{{ $time->out }}">
		</div>

		<!-- ACTION -->
		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/times">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>

	<!-- END OF CARD BODY -->
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection