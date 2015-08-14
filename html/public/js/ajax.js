/*
ajax.js

Objetivo:

Firma de la función:
ajaxRequest(method, resource, callback, params);

Por ejemplo:
ajaxRequest('get',
			'respuesta.txt',
			function(respuesta) {
				alert(respuesta); 
			},
			'u=' + usuario.value);

Principio DRY (Don't Repeat Yourself).
*/

function ajaxRequest(method, res, callback, params, noCache) {
	var xhr = new XMLHttpRequest(),
		sendBody;
	
	if(noCache == undefined) noCache = true;
	
	if(noCache) {
		params = Math.random() + '&' + params;
	}
	
	// Configuro la petición.
	if(method.toLowerCase() == "get") {
		xhr.open(method, res + '?' + params);
		sendBody = null;
	} else {
		xhr.open(method, res);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		sendBody = params;
	}
	
	// Definimos el callback
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4) {
			if(xhr.status == 200) {
				callback(xhr.responseText);
			}
		}
	}
	
	// Ejecutamos la petición
	xhr.send(sendBody);
}