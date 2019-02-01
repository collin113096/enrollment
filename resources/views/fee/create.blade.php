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
		<div class="form-group form-row">
			<label class="col-md-4 text-md-right col-form-label"><strong>Fee Name</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="name">
			</div>
		</div>
		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/fees">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection