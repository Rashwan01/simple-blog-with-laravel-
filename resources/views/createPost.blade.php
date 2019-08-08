@extends("layout.master")

@section ("content")
<div class="col-md-12">
  <h1> Create A New project</h1>

</div>
    <div class="col-md-12">
            <form method="POST" action="/post">
                @csrf
                    <div class="form-group">
                      <label for="title">Title </label>
                      <input type="text"
                             name="title"
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
                       placeholder="Body">
                    </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary">post publish</button>
                 
              </div>  
              
            @include("layout.errorForm")
    

                  </form>
            

    </div>
    

@endsection
