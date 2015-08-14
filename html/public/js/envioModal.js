/**
 * Created by llrocha on 05/08/2015.
 */
$(document).ready(function() {
    $('#verModal').on('show.bs.modal', function (event) {

        var button  = $(event.relatedTarget);
        var nombre  = button.data('nombre');
        var segundo = button.data('segundo');
        var email   = button.data('email');
        var phone   = button.data('phone');
        //document.write(nombre);

        var modal = $(this);
        var body = modal.find('.modal-body');

            if(body.find("h4"))
                body.find("h4").remove();

            if(nombre != "")
                body.append("<h4>Nombre: <small>"+nombre+"</small></h4>");

            if(segundo != "")
                body.append("<h4>Apellido: <small>"+segundo+"</small></h4>");

            if(email != "")
                body.append("<h4>Email: <small>" +email+ " </small></h4>");

            if(phone != "")
                body.append("<h4>Phone: <small>"+phone+"</small></h4>")

        body.find('#nombre').replaceWith("<input readonly class='form-control' required='required' name='expediente' value='"+nombre+"' id='expediente' type='text'>");

    })
});