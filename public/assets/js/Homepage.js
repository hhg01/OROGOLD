$('#btnAppointment').on('click', function () {
    let nombre = $("#name").val();
    let email = $("#email").val();
    let telefono = $("#phone").val();
    let mensaje = '';

    if (nombre != '' && telefono != '' && email.indexOf("@") != -1) {
        let datosEnvio = {
            nombre: nombre,
            email: email,
            telefono: telefono
        }
        $.ajax({
            type: "POST",
            url: "http://localhost/OROGOLD/index.php/Homepage/saveAppointment",
            data: datosEnvio,
            success: function (data) {
                if (data) {
                    mensaje = '<div id="mensajeError" class="alert alert-success" role="alert">Guardado Exitosamente</div>';
                    mensajeAjax(mensaje);
                } else {
                    mensaje = '<div id="mensajeError" class="alert alert-danger" role="alert">Ya tienes una cita</div>';
                    mensajeAjax(mensaje);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                mensaje = '<div id="mensajeError" class="alert alert-danger" role="alert">Ha sucedido un error, intentalo mas tarde</div>';
                mensajeAjax(mensaje);
            }
        });
    } else {
        var error = '<div id="mensajeError" class="alert alert-danger" role="alert">\n\
                        Te faltan datos\n\
                    </div>';
        mensajeAjax(error);

        $('html,body').animate({
            scrollTop: $('#mensajeCita').offset().top - 100
        }, 'slow');
    }
});

function mensajeAjax(mensaje) {
    $('#mensajeCita').empty().append(mensaje);
    setTimeout(function () {
        $('#mensajeError').fadeOut('slow', function () {
            $(this).remove();
        });
    }, 2000);
}

$('#btnAppointmentNow').on('click', function () {
    $("html, body").animate({
        scrollTop: $("#containerReserve").offset().top
    }, 2000);
});

let map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 21.806, lng: -102.877},
        zoom: 5
    });

    $('#btnMap').on('click', function () {
        map.setZoom(17);
        map.setCenter({lat: 19.425, lng: -99.164});
        let marker = new google.maps.Marker({
            position: {lat: 19.425489, lng: -99.162109},
            map: map
        });
    });
}
