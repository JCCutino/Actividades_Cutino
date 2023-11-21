document.addEventListener('DOMContentLoaded', function () {
    var avatar = document.getElementById('avatar');
    var bocadilo = document.getElementById('bocadillo');

    avatar.addEventListener('click', function () {

        bocadilo.classList.remove('invisible');
        bocadilo.classList.add('visible');

      
        setTimeout(function () {
            bocadilo.classList.remove('visible');
            bocadilo.classList.add('invisible');
        }, 1000);
    });
});