 // Obtenemos todos los enlaces dentro del ul
 let enlaces = document.querySelectorAll('ul a');

 // Iteramos sobre cada enlace y aplicamos el estilo color = purple si es externo
 for (let i = 0; i < enlaces.length; i++) {
    let enlace = enlaces[i];
   if (esEnlaceExterno(enlace)) {
     enlace.style.color = 'purple';
   }
 }

 // Creamosuna funcion para verificar si un enlace es externo
 function esEnlaceExterno(enlace) {
    let href = enlace.getAttribute('href');
   
   // Verificamos si el enlace es externo según las condiciones 
   return href && href.includes('://') && !href.startsWith('http://internal.com');
 }