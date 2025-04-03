
    document.addEventListener('DOMContentLoaded', function () {
        const userIcon = document.querySelector('.Usuario');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        userIcon.addEventListener('click', function () {
            // Alternar la visibilidad del menú desplegable
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Cerrar el menú si se hace clic fuera de él
        document.addEventListener('click', function (event) {
            if (!userIcon.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    });
