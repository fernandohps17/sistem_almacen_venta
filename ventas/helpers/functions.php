<script text="text/javascript">
    //  Script para evento click y ajax
    $('#').click(function(){
        datos=$('#').serialize();
        $.ajax({
            type: "POST",
            dara:datos,
            url:"../procesos/",
            success: function(r){

            }
        })
    })



    // Funcion para validar datos vacios
    function validarFormVacio(formulario) {
        datos=$('#' + formulario).serialize();
        d=datos.split('&');
        vacios = 0;
        for(i=0; i<d.length; i++) {
            controles=d[i].split("=");
            if(controles[1]=="A" || controles[1]=="") {
                vacios++;
            }
        }

        return vacios;
    }
</script>