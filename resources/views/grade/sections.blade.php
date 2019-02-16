@extends('registrar.template')
@section('title','All Grade')
@section('body')
<div class="card">
	<div class="card-header h5 text-primary">
		<strong>SECTION</strong>
	</div>
	<div class="card-body">
		<div class="row">
			@foreach($sections as $section)
			<div class="col-md-6 mb-4">
				<div class="card bg-dark text-white">
					<div class="card-img-top">
						<img class="w-100" src="{{ asset('images/facility/arch.jpg') }}" alt="">
					</div>
					<div class="card-body text-center">
						<div class="py-4">
							<h1 class="text-uppercase"><strong>{{ $section->name }}</strong></h1>
						</div>
						<div class="mb-3">
							<label for="">Section Adviser:</label>
							<h6><a href="">
								@if($section->teachers->count())
								{{ $section->teachers->first()->last_name }}, 
								{{ $section->teachers->first()->first_name }}
								{{ $section->teachers->first()->middle_name }}
								@else
									No Adviser
								@endif
							</a></h6>
						</div>
						<div>
							<h3><a href="">30 Students</a></h3>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
