<?php
    $conexion = mysqli_connect("localhost","watchsynin","a8e0967ec")
    or die ("Fallo la conexión a BD");
    mysqli_select_db($conexion,"watchsynin")
    or die("Error al seleccionar base de datos");
?>