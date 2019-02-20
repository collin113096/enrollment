@extends('enrollee.template')

@section('body')
<div class="alert alert-warning">
	<h1>Your application is still pending</h1>
	<hr>
	<p>We will send SMS Message to <strong>{{ $student->father->contact }} </strong> and <strong>{{ $student->mother->contact }}</strong> to notify you.</p>
</div>
@endsection