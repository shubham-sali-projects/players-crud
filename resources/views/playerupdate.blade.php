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
<h3 class="text-light border rounded p-2 text-center">Update Player</h3>
    <form method="GET" action="{{route('update',$data[0]->id)}}">
      @csrf
      <input type="hidden" value="{{$data[0]->id}}" name="id" placeholder="name" class="form-control">
      <div class="mb-3 mt-3">
        <label for="name" class="form-label text-light">Name:</label>
        <input type="name" value="{{$data[0]->name}}" class="form-control"  placeholder="Enter name" name="name">
      </div>
      <div class="mb-3">
          <label for="age" class="form-label  text-light">Age:</label>
          <input type="number" value="{{$data[0]->age}}" class="form-control"  placeholder="Enter Age" name="age">
        </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Role:</label>
            <input class="form-control" value="{{$data[0]->role}}" placeholder="Enter Role" type="name" name="role">
        </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Runs:</label>
            <input class="form-control" value="{{$data[0]->runs}}"  placeholder="Enter Runs" type="number" name="runs">
        </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Wickets:</label>
            <input class="form-control" value="{{$data[0]->wickets}}" type="number" placeholder="Enter Wickets" name="wickets">
        </div>
        <div class="mt-3 mb-3">
           <label class="form-label  text-light" for="">Country:</label>
            <input class="form-control" type="text" value="{{$data[0]->country}}" placeholder="Enter Country" name="country">
        </div>
        <button type="submit" class="btn text-light btn-outline-primary">Update</button>
      </form>
    </div>
</body>
</html>