<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Torik Shop</title>
</head>
<body>
  <h2>Currently Available Products</h2>
  <p>{{ $greeting }}</p>

  <ul>
    <li>
      <a href="/products/{{ $products[0]["id"] }}">
        {{ $products[0]["name"] }}
      </a>
    </li>
    <li>
      <a href="/products/{{ $products[1]["id"] }}">
        {{ $products[1]["name"] }}
      </a>
    </li>
  </ul>

</body>
</html>