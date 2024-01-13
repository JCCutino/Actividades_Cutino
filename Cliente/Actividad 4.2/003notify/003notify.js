/*

*/
function showNotification(options) {
  // Crear elemento de notificación
  let notification = document.createElement('div');
  notification.classList.add('notification');

  // Configurar opciones
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

  // Agregar notificación al cuerpo del documento
  document.body.appendChild(notification);

  // Ocultar la notificación después de 1.5 segundos
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
