<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        nav .w-5{
            display: none;
        }
        .container{
            background-image: url(https://images.unsplash.com/photo-1631194758628-71ec7c35137e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y3JpY2tldHxlbnwwfHwwfHx8MA%3D%3D);
             background-repeat: no-repeat; 
            background-size: 100%;
        }

        th{
            padding: 10px;
        }
        td{
            padding: 8px;
        }

       
        </style>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container text-light border border-primary rounded mt-3">
        <a href="{{route('form')}}" class="btn btn-primary mt-3">Add Player</a>

        <table >
            <thead>
                <tr class="">
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Role</th>
                <th>Runs</th>
                <th>Wickets</th>
                <th>Country</th>
                <th>Action</th>
                
            </thead>
            <tbody>
                @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->runs}}</td>
                <td>{{$user->wickets}}</td>
                <td>{{$user->country}}</td>
                <td><a href="{{route('view',$user->id)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{route('delete',$user->id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{route('updateplayer',$user->id)}}" class="btn btn-info">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-5">
        {{$users->links()}}
    </div>
</div>
</body>
</html>