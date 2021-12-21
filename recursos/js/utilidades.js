/**
     * Devuelve la ruta principal si no recibe datos y la ruta indicada si este recibe.
     * @param {String} rutaDestino Controlador al que queremos acceder.
     * @returns {String} Ruta del controlador enviado por parametro.
     */
    function base_url(rutaDestino) {
        'use strict';
        rutaDestino = rutaDestino || '';
        if (rutaDestino.indexOf('/') === 0) {
            rutaDestino = rutaDestino.substring(1);
        }

        var url = window.location.protocol + '//' + window.location.host;
        if (window.location.port) {
            url += ':' + window.location.port;
        }

        var pathArray = window.location.pathname.split('/');
        if (pathArray.length > 1) {
            url += '/' + pathArray[1];
        }

        url += '/' + rutaDestino;
        return url;
    }