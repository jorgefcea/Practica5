<!-- Cabe destacar que, al encontrarnos dentro de un directorio de archivos interno de una empresa la mayoría de metodos utilizados han sido el 
método POST, ya que es el más seguro para el envío de datos confidenciales. Para datos que no he considerado tan confidenciales como un botón 
de volver o el de salir de la sesión se ha utilizado el método GET. -->

<!-- 

* DIFERENCIA ENTRE COOKIES Y SESIONES *

COOKIES: Con la implementación de cookies modelaremos el envío de información a través de un conjunto de parámetros (nombre de la cookie, tiempo
de inactividad, etc.) y éstas serán almacenadas en el equipo del cliente. Cuando este vuelve a solicitar el mismo recurso al servidor
para volver a acceder a él, podrá utilizar los datos almacenados gracias a la cookie.

SESIONES: A diferencia del caso anterior, ahora será en el servidor donde se almacena toda la información
relativa a un usuario, la cual queda asociada a su login de acceso. Las sesiones se eliminarán cuando el usuario
cierra el navegador.

JUSTIFICACIÓN: En esta tarea he optado por la utilización de sesiones en vez de cookies, ya que considero que éstas son, en general, mucho más 
seguras que las cookies debido a que la información es almacenada en el servidor y no dentro de nuestro dispositivo. La utilización de cookies 
puede tener un enorme riesgo debido a que pueden ser modificadas o accedidas por terceros de una forma muy fácil, lo que representa un gran riesgo 
de seguridad.
 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Login</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">   
            <form class="login" action="index.php" method="post">
                <h2>Panel de Administrador</h2>
                <div class="form-field">
                    <i class="icon fas fa-user"></i>
                    <input type="text" class="input" placeholder="Usuario" name="user" required>
                </div>
                <div class="form-field">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" class="input" placeholder="Contraseña" name="pass" required>
                </div>
                <button type="submit" name="boton_login">
                    <span class="button-text">Iniciar Sesión</span>
                    <i class="button-icon fas fa-chevron-right"></i>
                </button>      
            </form>
        </div>
        <div class="screen__background">
            <span class="shape shape4"></span>
            <span class="shape shape3"></span>        
            <span class="shape shape2"></span>
            <span class="shape shape1"></span>
        </div>        
    </div>
</div>
</body>
</html>

