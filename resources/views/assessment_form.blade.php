<html>
	<head>
	</head>
	<body>
		<p>Please bring this assessment form when you make payment.</p>
		<div><strong>Student Name:</strong> {{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }} | <strong>Mode of Payment: </strong>{{ $fee->payment_mode }} <strong> | Grade: </strong>{{ $student->grade->name }}</div><br>
		<table border="1" cellpadding="10">
			<tbody>
				<tr>
					<td><strong>Registration</strong></td>
					<td>{{ $fee->registration }}</td>
				</tr>
				<tr>
					<td><strong>Tuition</strong></td>
					<td>{{ $fee->tuition }}</td>
				</tr>
				<tr>
					<td><strong>Misc</strong></td>
					<td>{{ $fee->misc }}</td>
				</tr>
				<tr>
					<td><strong>Computer</strong></td>
					<td>{{ $fee->computer }}</td>
				</tr>
				<tr>
					<td><strong>Internet</strong></td>
					<td>1200</td>
				</tr>
			</tbody>
		</table>
		<h1 style="text-align:right">Total: {{ $fee->total() }}</h1>
	</body>
</html>