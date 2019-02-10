<form method="post" action="{{ url }}">
@csrf
	<div class="card">
		<h3>{{ title }}</h3>
		<div class="card-body">
			{{ slot }}
		</div>
	</div>
</form>