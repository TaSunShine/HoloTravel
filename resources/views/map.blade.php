<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>

<link rel="stylesheet" href="{{ asset('js/map.js') }}">
<link rel="stylesheet" href="{{ asset('css/map.css') }}">



</head>
<body>

  <header class="header">
    <h1>Map of the Kingdom</h1>
  </header>

<a href="{{route('products')}}" class = "btn">도감</a>




  <div class="main-layout">
    <aside class="player-info">
      <h3>내 정보</h3>
      <p><strong>이름:</strong> {{$player->firstname}}</p>
      <p><strong>소지금:</strong> {{$player->money}}</p>
      <p><strong>현재 위치:</strong> {{$player->pos_x}} , {{$player->pos_y}}</p>
    </aside>



<section class="content">
  <div class="event-panel" style = "display:none;">
    오늘은 <strong>요코하마</strong>에서 <strong>비단</strong>이 고가에 거래됩니다!
  </div>

  <div class="container">
    <div class="map">
        @foreach ($cities as $city)
          <div 
            class="city-marker" 
            style="top: {{ $city->pos_y }}px; left: {{ $city->pos_x }}px;"
            data-name="{{ $city->name }}"
            data-king="{{ $city->king }}"
            data-population="{{ $city->population }}"
            data-safety="{{ $city->safety }}"
            data-economy="{{ $city->economy }}"
            data-description="{{ $city->description }}"
            data-pos_x="{{ $city->pos_x }}"
            data-pos_y="{{ $city->pos_y }}"
          >
            <div class="tooltip">{{ $city->name }}</div>
          </div>
        @endforeach

    </div>



    
    <div class="info-panel" id="infoPanel">
      <h3 id = "title">도시 상세정보</h3>
      <div>
      <ul style = "display:none;">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        
          
      </ul>

      </div>

        <div class ="ButtonGroup"> 
      <div>
          <button id="stateButton" class="trade-button" >상태</button>
      </div>  
      <div>
          <button id="tradeButton" class="trade-button">교역</button>
      </div>  
      <div>
          <button id="asd3" class="trade-button">시장정보</button>
      </div>      
    </div>
    </div>


    

  </div>


  <div class="modal-container" id="ModalContainer">
    <div class="modal-content">
      <h2>도시 정보</h2>
      <ul>
        <li><strong>왕:</strong> (왕이름)</li>
        <li><strong>인구:</strong> (인구수)</li>
        <li><strong>안전도:</strong> (안전도)</li>
        <li><strong>경제력:</strong> (경제력)</li>
        <li><strong>설명:</strong> (도시 설명)</li>
      </ul>
      <button class="modal-close">닫기</button>
      </div>
    </section>
  </div>




</body>
</html>
