<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>商品図鑑 - 깔끔한 스타일</title>
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Helvetica Neue', Arial, sans-serif;
      color: #333;
      padding: 1rem;
      max-width: 700px;
      margin: auto;
      line-height: 1.4;
    }
    .product {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 0.6rem 1rem;
      margin-bottom: 1rem;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      transition: box-shadow 0.15s ease;
    }
    .product:hover {
      box-shadow: 0 4px 8px rgba(0,0,0,0.12);
    }
    .product h2 {
      font-size: 1.1rem;
      margin: 0 0 0.3rem 0;
      font-weight: 600;
      color: #222;
    }
    .product .cost {
      font-weight: 500;
      color: #666;
      margin-bottom: 0.4rem;
      font-size: 0.95rem;
    }
    .product .description {
      font-size: 0.9rem;
      color: #555;
      white-space: pre-line;
    }
  </style>
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
