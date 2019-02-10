<div class="card">
	<div class="card-header">
		{{ $title }}
	</div>
	<div class="card-body">
		{{ $add_button }}
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						{{ $head }}
					</tr>
				</thead>
				<tbody>
						{{ $body }}
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="d-flex mt-3">
	{{ $pagination }}
</div>
