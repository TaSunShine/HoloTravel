<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>商品図鑑</title>

  <link rel="stylesheet" href="{{ asset('css/productsList.css') }}">
  
</head>
<body>
  @foreach($products as $product)
  <div class="product">
    <h2>{{ $product->name }}</h2>
    <div class="cost">価格: {{ number_format($product->cost) }} 円</div>
    <div class="description">{{ $product->description }}</div>
  </div>
  @endforeach
</body>
</html>
