<div class="modal fade" id="adviser-{{ $loop->iteration }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Adviser Information</h3>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<strong>Adviser Name</strong>
					<div class="border-bottom">
					{{ $adviser['last_name'] }},
					{{ $adviser['first_name'] }}
					{{ $adviser['middle_name'] }}
					</div>
				</div>

				<div class="form-group">
					<strong>Classification</strong>
					<div class="border-bottom">
					{{ $adviser['classification'] }}
					</div>
				</div>

				<div class="form-group">
					<strong>Birth Date</strong>
					<div class="border-bottom">
					{{ date('M j,Y', strtotime($adviser['birth_date'])) }}
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
