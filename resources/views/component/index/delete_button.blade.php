<form class="m-0 d-inline" method="post" {{ $action }}>
	@csrf 
	@method('DELETE')
	<button class="btn btn-danger btn-sm badge-pill" style="width:80px" type="submit">
		<i class="fas fa-minus-circle"></i> Delete</button>
</form>