  const playerPos = {
    x: {{ $player->pos_x }},
    y: {{ $player->pos_y }}
  };

  
  const markers = document.querySelectorAll('.city-marker');


  const stateButton = document.getElementById('stateButton');
  const tradeButton = document.getElementById('tradeButton');
  const infoPanel = document.getElementById('infoPanel');
  const map = document.getElementsByClassName('.map');

console.log(map);
  let selectedCityPos = null;
  let scale = 1;





  stateButton.addEventListener('click', () => {
    if (selectedCityPos) {
          infoPanel.innerHTML = `
      <div class="detail-panel" id="detail-panel">
        <h3>${marker.dataset.king} 상세정보</h3>
        <p>도시를 클릭하세요.</p>
      </div>
    `;
    } else {
      alert('도시를 선택하세요.');
    }
  });

  tradeButton.addEventListener('click', () => {
    if (selectedCityPos) {
      alert(`교역 시작: ${selectedCityPos.x}, ${selectedCityPos.y}`);
    } else {
      alert('도시를 선택하세요.');
    }
  });

markers.forEach(marker => {
  marker.addEventListener('click', () => {
    console.log('Marker clicked:', marker.dataset.name);
    stateButton.style.display = 'none';
    tradeButton.style.display = 'none';

    selectedCityPos = { x: 0, y: 0 };

    infoPanel.innerHTML = `
      <div class="info-panel" id="infoPanel">
        <h3>도시 상세정보</h3>
        <p>도시를 클릭하세요.</p>
      </div>
    `;
  });
});


  function checkTradeAvailability() {    
    if (
      selectedCityPos &&
      selectedCityPos.x === playerPos.x &&
      selectedCityPos.y === playerPos.y
    ) {      
      tradeButton.style.display = 'inline-block';
    } else {
      tradeButton.style.display = 'none';
    }
  }

  function zoomIn() {
    scale += 0.1;
    updateScale();
  }

  function zoomOut() {
    scale = Math.max(0.5, scale - 0.1);
    updateScale();
  }

  function updateScale() {
    markers.forEach(marker => {
      marker.style.transform = `scale(${scale})`;
    });
  }




  markers.forEach(marker => {
    marker.addEventListener('click', () => {
      stateButton.style.display = 'inline-block';
      selectedCityPos = {
        
        x: parseInt(marker.dataset.pos_x, 10),
        y: parseInt(marker.dataset.pos_y, 10)
      };

      checkTradeAvailability();
      infoPanel.innerHTML = `      
        <h3>${marker.dataset.name}</h3>
        <p><strong>유력자:</strong> ${marker.dataset.king}</p>
        <p><strong>인구:</strong> ${marker.dataset.population}</p>
        <p><strong>치안:</strong> ${marker.dataset.safety}</p>
        <p><strong>경제상태:</strong> ${marker.dataset.economy}</p>
        <p><strong>설명:</strong> ${marker.dataset.description}</p>
        <p><strong>위치:</strong> ${marker.dataset.pos_x}, ${marker.dataset.pos_y}</p>
      `;
    });
  });

  

  checkTradeAvailability();
