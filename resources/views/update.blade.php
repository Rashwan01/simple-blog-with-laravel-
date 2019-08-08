@extends("layout.master")

@section ("content")
<div class="col-md-12">
  
<h1 class="mb-5">  Update  Project Name </h1>

</div>
<div class="col-md-12">
  <form method="POST" action="/post/{{$post->id}}">
    @csrf
    @method("patch")
    <div class="form-group">
      <label for="title">Title </label>
      <input type="text"
      name="title"
      value="{{$post->title}}"
      class="form-control"
      id="title"
      aria-describedby="emailHelp"
      placeholder="Enter Title"
      
      >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <input type="text"
      class="form-control" 
      name="body" id="body" 
      value="{{$post->body}}"
      placeholder="Body">
    </div>
    
    <button type="submit" class="btn btn-primary"> Republish Post</button>
  </form>
  <div class="mt-5"></div>
  <form method="POST" action="/post/{{$post->id}}">
    @csrf
    @method("Delete")
    
    <div class="form-group">
      <button type="submit" class="btn btn-secondary"> delete Post</button>
    </div>       </form>
    

  </div>
  

  @endsection
