@section('enctype')
<form method="post" action="{{ $url }}" >
@show
@csrf
	<div class="card">
		@section('card_header')
		<div class="card-header font-weight-bold">
		@show
			{{ $title }}
		</div>
		<div class="card-body">
			{{ $slot }}
		</div>
	</div>
</form>