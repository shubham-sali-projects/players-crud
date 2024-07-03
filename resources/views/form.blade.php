<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .container{
    background-image: url(https://images.unsplash.com/photo-1675186883824-a14b5c5d8da2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D);
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
</head>
<body>
  <div class="container border border-primary mt-3 p-3 rounded">
<h3 class="text-light border rounded p-2 text-center">Add Player</h3>
{{-- @foreach ($errors->all() as $error)
<ul class="alert alert-danger">{{$error}}</ul>
@endforeach --}}
    <form method="POST" action="{{route('add')}}">
      @csrf
      <div class="mb-3 mt-3">
        <label for="name" class="form-label text-light">Name:</label>
        <input type="name" class="form-control"  placeholder="Enter name" name="name">
        <span class="text-danger h4">
          @error('name')
          {{$message}}
          @enderror
        </span>
      </div>
      <div class="mb-3">
          <label for="age" class="form-label  text-light">Age:</label>
          <input type="number" class="form-control"  placeholder="Enter Age" name="age">
          <span class="text-danger h4">
            @error('age')
            {{$message}}
            @enderror
          </span>
        </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Role:</label>
            <input class="form-control" placeholder="Enter Role" type="name" name="role">
            <span class="text-danger h4">
              @error('role')
              {{$message}}
              @enderror
            </span>
          </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Runs:</label>
            <input class="form-control"  placeholder="Enter Runs" type="number" name="runs">
            <span class="text-danger h4">
              @error('runs')
              {{$message}}
              @enderror
            </span>        
          </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Wickets:</label>
            <input class="form-control" type="number" placeholder="Enter Wickets" name="wickets">
            <span class="text-danger h4">
              @error('wickets')
              {{$message}}
              @enderror
            </span>
          </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Country:</label>
            <input class="form-control" type="text" placeholder="Enter Country" name="country">
            <span class="text-danger h4">
              @error('country')
              {{$message}}
              @enderror
            </span>
          </div>
        <button type="submit" class="btn text-light btn-outline-primary">Submit</button>
      </form>
    </div>
</body>
</html>