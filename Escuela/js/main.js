document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('backgroundVideo');

    if (video) {
        video.addEventListener('ended', function() {
            // 1. Comienza a desvanecer el video (hacerlo transparente)
            video.style.opacity = 0.9;

            // 2. Espera a que termine el desvanecimiento (0.5s según el CSS)
            //    Luego, reinicia el video y comienza a aparecer
            setTimeout(function() {
                video.currentTime = 0; // Reinicia el video al principio
                video.play();          // Comienza a reproducir de nuevo
                video.style.opacity = 1; // Hace que el video aparezca gradualmente
            }, 200); // 200 milisegundos = 0.2 segundos (debe coincidir con la duración de la transición CSS)
        });

        // Intenta reproducir el video y maneja errores si el autoplay es bloqueado
        video.play().catch(error => {
            console.warn("La reproducción automática del video fue bloqueada por el navegador. Se requiere interacción del usuario.", error);
            // Podrías mostrar un botón de "Play" o un mensaje al usuario aquí.
        });
    } else {
        console.error("Elemento de video no encontrado.");
    }
});