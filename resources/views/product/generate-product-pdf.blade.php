<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h2>Title : {{$title}}</h2>
    <h2>Date : {{$date}}</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $userData)
                <tr>
                    <td>{{$userData->id}}</td>
                    <td>{{$userData->name}}</td>
                    <td>{{$userData->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>