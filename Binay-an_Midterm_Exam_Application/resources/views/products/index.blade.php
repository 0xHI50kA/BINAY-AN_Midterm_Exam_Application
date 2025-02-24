<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Available Gadgets</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Price ($)</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['brand'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
