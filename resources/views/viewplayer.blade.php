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

</head>
<body>
    <div class="row">
        @foreach ($datas as $data)
        <div class="col-md-6 offset-md-3 mt-4">
            <h3>Name:{{$data->name}}</h3>
            <h3>Age:{{$data->age}}</h3>
            <h3>Role:{{$data->role}}</h3>
            <h3>Runs:{{$data->runs}}</h3>
            <h3>Wickets:{{$data->wickets}}</h3>
            <h3>Country:{{$data->country}}</h3>
            {{-- <img src="{{$data->imagex}}" alt=""> --}}

        </div>
        @endforeach

    </div>
        
</body>
</html>