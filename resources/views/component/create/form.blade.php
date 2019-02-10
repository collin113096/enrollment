<form method="post" action="{{ $url }}">
@csrf
	<div class="card">
		<div class="card-header bg-white font-weight-bold">
			{{ $title }}
		</div>
		<div class="card-body">
			{{ $slot }}
		</div>
	</div>
</form>