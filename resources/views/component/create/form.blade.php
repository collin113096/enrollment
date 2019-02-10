<form method="post" action="{{ $url }}">
@csrf
	<div class="card">
		<div class="card-header font-weight-bold py-4 h5 text-center">
			{{ $title }}
		</div>
		<div class="card-body">
			{{ $slot }}
		</div>
	</div>
</form>