<section class="container mt-5 p-5">
    <form class="bg-warning text-white rounded p-5" action="{{$values? '/animal/update/'.$animal->id : '/animal/add'}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Animal's name</label>
          <input type="text" class="form-control" name="name" value="{{$values? $animal->name : null}}">
        </div>
        <div class="form-group">
          <label>Species name</label>
          <input type="text" class="form-control" name="species" value="{{$values? $animal->species : null}}">
        </div>
        <div class="form-group">
          <label>Picture</label>
          <input type="file" class="form-control" name="src">
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="number" class="form-control" name="age" value="{{$values? $animal->age : null}}">
        </div>
       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$values? $animal->description : null}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-light text-warning">{{$values? 'Edit' : 'Add'}}</button>
          </div>
        </form>
        <a href="{{$values? '/animal/show/'.$animal->id : '/'}}" class="my-3 btn btn-secondary">Go Back</a>
</section>