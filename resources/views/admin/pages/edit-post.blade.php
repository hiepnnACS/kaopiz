@extends('admin.layouts.master')

@section('content')
<h1>Chỉnh sửa</h1>
	<form action="{{ route('update.post', ['id' => $data_post->id]) }}" method="post">
		@csrf
	  <div class="form-group">
	    <label for="email">Tên tiêu đề</label>
	    <input type="text" name="title" value="{{ $data_post->title }}" class="form-control" placeholder="Enter email" id="email">
	  </div>

	  <div class="form-group">
	    <label for="pwd">Nội Dung</label>
	    <textarea class="form-control" name="content" id="" cols="30" rows="10">{{ $data_post->content }}</textarea>
	  </div>

	  <div class="form-group">
	    <label class="form-check-label">Trạng thái</label>
	      <select class="form-control" name="status" id="">
	      	<option value="1">Hiển thị</option>
	      	<option value="0">Không Hiển thị</option>
	      </select>
	  </div>
  		<button type="submit" class="btn btn-primary">Lưu</button>
	</form>
@endsection