<table class="table">
	<thead>
		<th>ID User</th>
		<th>Tên </th>
		<th>Lớp</th>
	</thead>

	<tbody>
		@foreach($result as $r)
			<tr>
				<td>{{ $r->id }}</td>
				<td>{{ $r->name }}</td>
				<td>{{ $r->class }}</td>
			</tr>
		@endforeach
	</tbody>
</table>