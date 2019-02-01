@extends('template')
@section('title','Create Subject')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/subjects">
@csrf
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Create Subject
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">
		<div class="form-group">
			<label><strong>Subject Name</strong></label>
			<input class="form-control" type="text" name="name">
		</div>
		<div class="form-group">
			<label><strong>Description</strong></label>
			<textarea class="form-control" name="description" cols="30" rows="5"></textarea>
		</div>
		<div class="form-group">
			<label><strong>Unit(s)</strong></label>
			<input class="form-control" type="number" name="unit">
		</div>
		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/subjects">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection