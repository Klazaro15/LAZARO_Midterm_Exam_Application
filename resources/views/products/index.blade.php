<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Products</title>
    <style>
        body {
            font-family: 'Arial', sans-serif; 
            background-color: #f9f9f9; 
            color: #333; 
            text-align: center; 
            padding: 20px; 
            line-height: 1.6; 
        }        
        h1 {
            color:rgb(221, 30, 8); 
            margin-bottom: 30px; 
            font-size: 2.5em; 
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1); 
        }        
        ul {
            list-style-type: none;
            padding: 0; 
        }
        li {
            background-color: #fff; 
            margin: 15px auto; 
            padding: 15px; 
            border-radius: 8px; 
            width: 250px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            transition: all 0.3s ease;
        }
        li:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15); 
        }
        .price {
            font-weight: bold;
            color: #27ae60; 
            display: block; 
            margin-top: 5px; 
        }
    </style>
</head>
<body>
    <h1>Restaurant Menu</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product['name'] }}
                <span class="price">${{ number_format($product['price'], 2) }}</span>
            </li>
        @endforeach
    </ul>
</body>
</html>
