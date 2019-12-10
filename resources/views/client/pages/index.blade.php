@extends('client.layouts.master')

@section('title')
	Trang chu
@endsection

@section('content')

    @if(session()->has('success')) 
     <div class="alert alert-success">
        {{ session()->get('success') }}
     </div>
    @endif
  
	@foreach($data_posts as $post)
    
		<div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ Str::limit($post->content, 200, '...') }}</p>
            <a href="{{ route('detail.post', ["$post->id"]) }}" class="btn btn-danger">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted {{ $post->created_at }} by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>



	@endforeach
	
@endsection