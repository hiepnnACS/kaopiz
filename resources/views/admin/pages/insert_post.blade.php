@extends('admin.layouts.master')	

@section('content')
	<form action="{{ route('save.post')}}" method="post">
		@csrf
	  <div class="form-group">
	    <label for="email">Duyeen cho	</label>
	    <input type="text" name="title" value="" class="form-control" placeholder="Enter email" id="email">
	    @if(count($errors) > 0)
	    {{-- {{ dd($errors) }} --}}
			<p class="text-warning">{{ $errors->first('title') }}</p>
	    @endif

	  </div>

	  <div class="form-group">
	    <label for="pwd">Nội Dung</label>
	    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
	    @if(count($errors) > 0)
	    {{-- {{ dd($errors) }} --}}
			<p class="text-warning">{{ $errors->first('content') }}</p>
	    @endif
	  </div>

	  <div class="form-group">
	  	<label for="">Đường dẫn url</label>
	  	<input type="text", name="url", class="form-control">
	  	@if(count($errors) > 0)
	    {{-- {{ dd($errors) }} --}}
			<p class="text-warning">{{ $errors->first('url') }}</p>
	    @endif
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