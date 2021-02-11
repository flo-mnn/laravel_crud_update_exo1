<div class="card border-warning mx-auto" style="width: 18rem;">
  <img src="{{$animal->src}}" class="card-img-top" alt="animal">
  <div class="card-body">
    <h5 class="card-title">{{$animal->name .", the ".$animal->species}}</h5>
      @if ($looping)
            <a href="/animal/show/{{$animal->id}}" class="btn btn-primary">Details</a>
      @else
            <h6 class="card-subtitle mb-2 text-muted">{{$animal->age}} years-old</h6>
            <p class="card-text">{{$animal->description}}</p>
            <a href="/animal/edit/{{$animal->id}}" class="btn btn-warning my-1">edit</a>
            <form action="/animal/delete/{{$animal->id}}"  method="post">
              @csrf
              <button type="submit" class="btn btn-danger my-1">delete</button>
            </form>
            <a href="/" class="btn btn-secondary my-1">go back</a>
      @endif
        
    </div>
  </div>