let toggleButton = document.getElementById('toggleButton');
  let menu = document.querySelector('.menu');

  toggleButton.addEventListener('click', function() {
    menu.classList.toggle('active');
    toggleButton.classList.toggle('active');
  });