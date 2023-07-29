<?php   
    include ("phpfunctions.php");

    $nombre = $_POST["Txt_Nombre"];
    $correo = $_POST["Txt_Corro"];
    $pregunta = $_POST["Txt_Pregunta"];

    switch($_POST["functionname"]){ 

        case '[NAME OF FUNCTION]': 
            EnviaCorreoDesdeWeb($nombre, $correo, $pregunta);
            break;      
    }   
?>

<!-- 
    jQuery.ajax({
        type: "POST",
        url: 'callphpinjs.php',
        data: {functionname: '[NAME OF FUNCTION]', arguments: [$(".Txt_Nombre").val(), $(".Txt_Correo").val(), $(".Txt_Pregunta").val()]}, 
         success:function(data) {
        alert(data); 
         }
    }); 
-->