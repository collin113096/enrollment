<form class="m-0 d-inline" method="post" {{ $action }}>
	@csrf 
	@method('DELETE')
	<button class="btn btn-danger" type="submit">
		<i class="fas fa-minus-circle"></i> Delete</button>
</form>