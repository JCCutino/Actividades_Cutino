/*

*/
function showNotification(options) {
  // Creamos un elemento de notificación
  let notification = document.createElement('div');
  notification.classList.add('notification');

  // Configuramos las opciones
  let topPosition = options.top || 0;
  let rightPosition = options.right || 0;

  notification.style.top = topPosition + 'px';
  notification.style.right = rightPosition + 'px';

  if (options.html) {
    notification.innerHTML = options.html;
  }

  if (options.className) {
    notification.classList.add(options.className);
  }

  // Agregamos la notificación al cuerpo del documento
  document.body.appendChild(notification);

  // Ocultamos la notificación después de 1.5 segundos
  setTimeout(() => {
    document.body.removeChild(notification);
  }, 1500);
}


showNotification({
  top: 10,
  right: 10,
  html: 'Hello!',
  className: 'welcome'
});
