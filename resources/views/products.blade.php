<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        table, th, td {
            border: 1px solid black;
            border: 2px solid black;
            border-radius: 10px;
            background-color: DodgerBlue;
        }
        th, td {
            background-color: #F0FFFF;
            text-align: center;
        }
    </style>
</head>
<body>
<table style="width:100%">
    <thead>
    <tr>
        <th witdh = 10%>ID</th>
        <th>Product name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Price</th>
        <th>Count of items</th>
        <th>Image</th>
        <th>Category ID</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($view as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->product_name}}</td>
            <td>{{$row->code}}</td>
            <td text-align: left>{{$row->description}}</td>
            <td>{{$row->price}}</td>
            <td>{{$row->number_items}}</td>
            <td><img src= {{$row->url_img}} style="width:64px;height:64px;"></td>
            <td>{{$row->category_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    {{ $view->links() }}
</body>
</html>