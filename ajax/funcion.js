$('#enviar').click(regresar)

function regresar() {
    $.ajax({
        url:'recibe_producto_ajax.php',
        type: 'post',
        dataType: 'json',
        data:{
            nombre:$('#nombre').val(),
            costo:$('#costo').val(),
            precio:$('#precio').val(),
            stcok:$('stcok').val(),
            stock_min:$('#stock_min').val()

        }
    }).done(
        function(data){
            $('#salida').append(data);
            $('#nombre').val(''),
            $('#costo').val(''),
            $('#precio').val(''),
            $('stcok').val(''),
            $('#stock_min').val('')
        }
    )
}