var map = L.map('mapid').setView([59.9373998,30.31727135], 20);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

L.marker([59.9373998, 30.31727135]).addTo(map)
      .bindPopup('Центр изучения иностранных языков "Polyglot"')
      .openPopup();
