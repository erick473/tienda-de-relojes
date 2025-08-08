<<!DOCTYPE html>
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
            input[type="password"] {
                width: calc(100% - 5px);
                padding: 10px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            .botones
            {
                width: 70%;
                background-color: #4C849C;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .botones:hover
            {
                background-color: #313143;
            }


        </style>
    </head>
    
    <body>
        
        <form> 
            <center><img src="img/logocir.png" alt="logo" style="height: 130; width: 130; "></center>
            <br>
            <h2 style="color: white;"><center>Iniciar sesión</center></h2>
            <br>
            <label style="color: white;" for= "Nombre">Nombre de usuario</label>
            <input type="text" id="Nombre" name="Nombre" required>
            <br>
            <label  style="color: white;" for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <br>
            <center> <input type="submit" value="Iniciar sesión" class="botones"> </center>
            <center> <a href="RegistroWatchSynin.php"><button type="button" value="crearCuenta" class="botones">Crear cuenta</button></a></center>
        </form>
    </body>
    <?php
    
    ?>
</html>