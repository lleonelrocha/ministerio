// ajax-jsondb.js

window.onload = function() {
    var btn = document.getElementById('ajaxBtn');
    btn.onclick = function() {
        // validación
        ajaxRequest(
            'get',
            'traerPelicula',
            function(pelicula) {
                pelicula = JSON.parse(pelicula);

                var nombre = document.getElementById('nombre');
                var genero = document.getElementById('genero');
                var precio = document.getElementById('precio');
                var descripcion = document.getElementById('descripcion');

                nombre.value = pelicula.nombre;
                genero.value = pelicula.genero;
                precio.value = pelicula.precio;
                descripcion.value = pelicula.descripcion;
            },
            'id=' + document.getElementById('codigo').value
        );
    }
}



setInterval(function() {
    ajaxRequest('get',
        'hora',
        function(rta) {
            var div = document.getElementById('respuesta');
            div.innerHTML = rta;
        });
}, 1000);