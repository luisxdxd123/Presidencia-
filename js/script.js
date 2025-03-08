const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});


document.addEventListener("DOMContentLoaded", function () {
    function ajustarFormulario() {
        if (window.innerWidth <= 768) {
            document.getElementById("container").classList.add("mobile-view");
        } else {
            document.getElementById("container").classList.remove("mobile-view");
        }
    }

    // Ajustar al cargar la página
    ajustarFormulario();

    // Ajustar cuando se cambie el tamaño de la pantalla
    window.addEventListener("resize", ajustarFormulario);
});
