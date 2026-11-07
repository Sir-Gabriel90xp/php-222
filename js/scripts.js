// Abrir / cerrar el menú lateral en pantallas pequeñas
document.addEventListener('DOMContentLoaded', function () {
    var boton = document.getElementById('btnMenu');
    var menu = document.getElementById('sidebar');

    if (boton && menu) {
        boton.addEventListener('click', function () {
            menu.classList.toggle('abierto');
        });
    }
});
