<form class="mb-0" method="post" action="{{ $url }}">
@csrf
@method('PATCH')
@section('form_body')
	<div class="card">
		<div class="card-header font-weight-bold">
			{{ $title }}
		</div>
		<div class="card-body">
			{{ $slot }}
		</div>
	</div>
@show
</form>