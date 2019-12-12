<form action="{{ route('result.role') }}" method="get">
	<label for="">ID USER</label>
	<input type="number" name="idUser">

	<br>
	<label for="">Phone</label>
	<input type="number" name="phone">
	<br>

	<label for="">Name Role</label>
	<input type="text" name="name_role">

	<input type="submit">
</form>


<table>
	<thead>
		<th>ID User</th>
		<th>SDT</th>
		<th>Ten Role</th>
	</thead>

	<tbody>
		@if(isset($result))
		{{-- {{ dd($result) }} --}}
			@foreach($result as $r)
				<tr>
					<td>{{ $r->id }}</td>
					<td>{{ $r->phone->number }}</td>
					<td>{{ $r->role[0]->name }}</td>
				</tr>
			@endforeach
		@endif
	</tbody>
	


</table>