<form method="post" action="{{ $url }}">
@csrf
@method('PATCH')
	<div class="card">
		<div class="card-header font-weight-bold">
			{{ $title }}
		</div>
		<div class="card-body">
			{{ $slot }}
		</div>
	</div>
</form>