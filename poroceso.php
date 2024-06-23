<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user = 'luis';
    $pass= 'mendoza';
    $edad='';

    $user = !empty($_POST['user']) ? $_POST['user'] : 'vacio';
    $pass = !empty($_POST['pass']) ? $_POST['pass'] : 'vacio';
    $edad = !empty($_POST['edad']) ? $_POST['edad'] : 'vacio';

    if($user !='luis' || $pass !='mendoza'){
        echo '<p> Datos incorectos, favor de verificarlos <p>';
    }elseif($edad < 18){
        echo '<p>Eres menor de edad, acceso denegado<p>';
    }else{
        echo '<p>Accion completadda</p>';
    }
}else{
    echo "Metodo " . $_SERVER['REQUEST_METHOD'];
}
?>