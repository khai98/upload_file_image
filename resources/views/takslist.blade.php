<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="container">
    <h2 style="text-align: center;padding-top: 14px;padding-bottom: 30px"> Tasks List</h2>
    <table class="table">
        <thead>
        <tr>
            <th>STT</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Address</th>
            <th>updated_at</th>
            <th>created_at</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($task))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
          @else
            @foreach($tasks as $key => $task)
                <tr>
                    <th scope="row">{{ $key++ }}</th>
                    <td>{{$task->name}}</td>
                    <td>{{$task->phone}}</td>
                    <td>{{$task->email}}</td>
                    <td>{{$task->address}}</td>
                    <td>{{$task->updated_at}}</td>
                    <td>{{$task->created_at }}</td>
                    <td>
                        <img src="{{ asset('/storage/images/' . $task->image) }}" alt="" style="width: 150px">
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <a href="{{route('index')}}">Back</a>
</div>
</body>
</html>
