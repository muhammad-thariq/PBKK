<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Torik Shop</title>

  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>Torik Shop</h1>
      <a href="/products"> 
        All products
      </a>
      <br>
      <a href="/products/create"> 
        Create New product
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>