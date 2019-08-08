@extends("layout.master")

@section ("content")

<div class = "col-md-8">
	<div class="card-body">
		<h1 class="card-title text-uppercase text-bold">title :{{$post->title}}</h1>


		<p class="card-text"> body:{{$post->body}}</p>



	</div>


</div>
@endsection
