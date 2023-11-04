// Cambiamos el fetch para apuntar al script de PHP
document.addEventListener('DOMContentLoaded', function() {
    fetch('load_computers.php')
      .then(response => response.json())
      .then(data => {
        const catalog = document.getElementById('catalog');
        data.forEach(computer => {
          const div = document.createElement('div');
          div.className = 'computer';
          div.innerHTML = `<h2>${computer.name}</h2>
                           <p>${computer.description}</p>
                           <p><strong>Precio:</strong> ${computer.price}</p>`;
          catalog.appendChild(div);
        });
      })
      .catch(error => {
        console.error('Error fetching the computers:', error);
      });
  });
  