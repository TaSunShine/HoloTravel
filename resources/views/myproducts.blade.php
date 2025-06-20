<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>交易画面 - ホロと商人の交易シミュレーター</title>
  <link rel="stylesheet" href="/css/main.css">  
  
</head>
<body>

<form action="/" method="GET">
    <button type="submit" class="back-btn">終える</button>

</form>
  <h1>交易開始</h1>
  <div class="status">現在の資金: <span id="gold">100</span> ゴールド</div>

    <div class="history-log" id="history-log">
    <strong>最新の:</strong><br />
    2025/04/13 泥棒に 「500G」 盗まれた。。。
  </div>  

  <br>


  <form id="trade-form" method="POST" action="/trade/process">
    @csrf
    <table>
      <thead>
        <tr>
          <th>商品名</th>
          <th>価格 (ゴールド)</th>
          <th>所持数</th>
          <th>取引数</th>
          <th>操作</th>
        </tr>
      </thead>
<tbody>
@foreach($items as $item)
    <tr>
        <!-- 商品名 -->
        <td>{{ $item->name }}</td>
        <!-- 価格 -->
        <td>{{ $item->cost }}</td>
        <!-- 所持数 -->
        <td>{{ $myitem->stock }}</td>
        <td>
            <input type="number" name="trade_quantity[{{ $item->name }}]" min="0" max="100" value="0" />
        </td>
        <td>
            <button type="submit" name="action" value="buy_{{ $item->name }}">購入</button>
            <button type="submit" name="action" value="sell_{{ $item->name }}">売却</button>
        </td>
    </tr>
@endforeach
</tbody>

    </table>
  </form>

  <div class="trade-log" id="trade-log">
    <strong>最新の取引記録:</strong><br />
    ここに取引の履歴が表示されます。
  </div>



  
</body>
</html>
