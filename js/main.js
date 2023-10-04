    // Espera a que se cargue todo el contenido HTML
    document.addEventListener('DOMContentLoaded', () => {
        // Obtén todas las filas de la tabla de asignaturas
        const filasModulos = document.querySelectorAll('.asignaturas table tbody tr');
  
        // Agrega un evento de clic a cada fila
        filasModulos.forEach((fila) => {
          let contador = 0; 
          const columnaPlus = document.createElement('td'); 
  
          fila.appendChild(columnaPlus); // Agrega la celda a la fila
  
          fila.addEventListener('click', () => {
            if (contador < 20) { // Verifica si se ha alcanzado el límite de "+"
              contador++; // Incrementa el contador
              columnaPlus.textContent += '+'; // Agrega "+" en la celda
            }
          });
        });
      });