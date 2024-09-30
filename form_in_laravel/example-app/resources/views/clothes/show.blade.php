<!DOCTYPE html>
<html>
<head>
    <title>{{ $item['name'] }}</title>
</head>
<body>
    <h1>{{ $item['name'] }}</h1>
    <p>Price: ₹{{ $item['price'] }}</p>
    <p>Description: {{ $item['description'] }}</p>
    <a href="{{ url('clothes') }}">Back to Clothes List</a>
</body>
</html>
