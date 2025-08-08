<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar sesión</title>
        <style>
            body {
                
                font-family: Arial, sans-serif;
               
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url(fondoOpaco.jpg)
                
            }
            form {
                background-color: #20202C;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
                width: 350px;
            }
            input[type="text"],
            input[type="password"],input[type="tel"] {
                width: calc(100% - 5px);
                padding: 10px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"] {
                width: 70%;
                background-color: #4C849C;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
             
            }

            input[type="submit"]:hover {
                background-color: #313143;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="RegistroWatchSynin.php"> 
            <a href="LoginWatchSynin.html">
                <img src="flecha.png" alt="logo" style="height: 50px; width: 50px; ">
            </a>
            <center><img src="logocir.png" alt="logo" style="height: 130px; width: 130px; "></center>
            <br>
            <h2 style="color: white;"><center>Crea una cuenta</center></h2>
            <br>
            <label style="color: white;" for="Nombre">Nombre de usuario</label>
            <input type="text" id="Nombre" name="Nombre" required>
            <br>
            <label style="color: white;" for="Correo">Correo electronico</label>
            <input type="text" id="Correo" name="Correo" required>
            <br>
            <label style="color: white;" for="Ciudad">Ciudad</label>
            <input type="text" id="Ciudad" name="Ciudad" required>
            <br>
            <label style="color: white;" for="Numero">Numero telefonico(33xxxxxxxx)</label>
            <input type="tel" id="numero" name="Numero" pattern="33[0-9]{8}" required />
            <br>
            <label  style="color: white;" for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <br>
            <center> <input type="submit" name="Registrar" id="Registrar" value="Registrar"> </center>   
        </form>
        <?php
            if(isset($_POST['Registrar']))
            {
                $usuario=$_POST['Nombre'];
                $password=$_POST['password'];
                $ciudad=$_POST['Ciudad'];
                $telefono=$_POST['Numero'];
                $correo=$_POST['Correo'];
                $host="127.0.0.1";
                $usuarioBD="root";
                $conBD="";
                $BD="watchsynin";
                $conexion=mysqli_connect($host,$usuarioBD,$conBD,$BD);
                if($conexion==null)
                {
                    echo "No hay conexion";
                }
                else
                {
                    $busqueda = "SELECT * FROM users WHERE nombreUsuario = '$usuario'";
                    $resultado = mysqli_query($conexion, $busqueda);
                    if (mysqli_num_rows($resultado) > 0) {
                        echo "<h1>El usuario ya existe<h1>";
                    } 
                    else 
                    {
                        $insertar = "INSERT INTO users VALUES ('".$usuario."', '".$password."', '".$correo."','".$ciudad."','".$telefono."')";
                        if ($conexion->query($insertar) === TRUE) {
                            echo "<div><h1>Usuario registrado</h1></div>";
                        } 
                        else {
                            echo "Error de inserción:".$conexion->error."<br>";
                        }
                    }
                    $conexion->close();
                }
                echo "<script>
                        setTimeout(function() {
                        window.location.href = 'LoginWatchSynin.php';
                        }, 3000); // 3000 milliseconds = 3 seconds
                        </script>";
            }
        ?>
    </body>
</html>