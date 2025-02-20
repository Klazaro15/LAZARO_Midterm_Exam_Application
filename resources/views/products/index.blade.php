<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Products</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Restaurant Menu</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - ${{ number_format($product['price'], 2) }}</li>
        @endforeach
    </ul>
</body>
</html>
