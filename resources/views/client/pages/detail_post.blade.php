@extends('client.layouts.master')

@section('title')
	Chi tiết
@endsection

@section('content')
  


	<h1 class="mt-4">{{ $detail_post->title }}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{ $detail_post->created_at }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">{{ $detail_post->content }}</p>


        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="{{ route('add.comment', ['idPost' => $detail_post->id]) }}" method="post">
              @csrf
              <div class="form-group">
                <textarea name="content" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
         @foreach($comment as $cm)
         
	        <div class="media mb-4">
	          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
	          <div class="media-body">
              
              @foreach($user as $u)

                @if($u->id == $cm->idUser)

	                 <h5 class="mt-0">{{ $u->name }}</h5>

                @endif

              @endforeach

					       {{ $cm->content }}
	            
	          </div>
	        </div>
      
        @endforeach

       

 
@endsection