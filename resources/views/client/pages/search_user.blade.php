<form action="{{ route('result.search.user') }}" method="get" class="form-control">
	@csrf
	<label for="">Nhập vào ID User</label>
	<input type="number" name="idUser">
<hr>
	<br>
	<label for="">Nhập vào Tên User</label>
	<input type="text" name="name">
	<hr>
	<br>
	<label for="">Nhập vào Class</label>
	<input type="text" name="class">
	
	<hr>
	<br>
	<button class="btn btn-success">Tìm kiếm</button>
	<hr>
	<br>

	<table class="table">
	<thead>
		<th>ID User</th>
		<th>Tên </th>
		<th>Lớp</th>
	</thead>

	<tbody>
		@if(isset($result))
		@foreach($result as $r)
			<tr>
				<td>{{ $r->id }}</td>
				<td>{{ $r->name }}</td>
				<td>{{ $r->class }}</td>
			</tr>
		@endforeach
		@endif
	</tbody>
</table>

</form>