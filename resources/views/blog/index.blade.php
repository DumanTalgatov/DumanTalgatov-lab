<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
@foreach($labs as $lab )
    <tr class="active">
    <td>{{$lab->id}}</td>
    <td>{{$lab->name}}</td>
    <td>{{$lab->surname}}</td>
    <td>{{$lab->email}}</td>
    <td><img src="{{ $lab->image }}"></td>
    </tr>
@endforeach
</body>
</html> 