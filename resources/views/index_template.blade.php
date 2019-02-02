@extends('template')
@section('content')
<div class="col-md-8">
	<div class="card">
		
		<div class="card-header">
			@yield('card-header')
		</div>

		<div class="card-body">
			@yield('add-button')
			<table class="table">
				<thead>
					<tr>
						@yield('table-head')
					</tr>
				</thead>
				<tbody>
					@yield('table-body')
				</tbody>
			</table>
		</div>

	</div>
</div>
@endsection