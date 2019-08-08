@extends("layout.master")

@section ("content")

<div class="col-md-8">
  <div class="row">
    @if(count($allPosts))

    <div class="col-md-12  mx-auto ">

    </div>
    @endif
    @foreach($allPosts as $post)
    <div class="col-md-12">
      <div class="card text-dark bg-white mb-3">
        <div class="card-header"><small class="text-danger">id :</small>post {{$post->id}} <div class="holder float-right">


        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title"><span class="text-danger">Tilte of Porject:</span>{{$post->title}}</h5>
        <p class="card-text"><span class="text-danger">Body of Porject:</span>{{$post->body}}</p>
      </div>
    </div>
  </div>
  @endforeach

</div>
</div>
@endsection
