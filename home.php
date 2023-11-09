<?php
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Login</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" rel="stylesheet">
    <style>
        input {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #d4d3e8;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 2px #5c5696;
            transition: 0.2s;
            text-decoration: none;
            color: #4c489d;
            margin: auto;
            margin-top: 30px;
        }
        input:active,
        input:focus,
        input:hover {
            border-color: #6a679e;
            outline: none;
        }
        .input-icon {
            font-size: 24px;
            margin-left: auto;
            color: #7875B5;
        }
        input::placeholder {
            color: #7e7c9e;
            text-transform: uppercase;
        }
        button {
            margin-left: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
        <?php
                if(isset($_SESSION["user"])) {
                    echo "<br><h3>Esta es la página principal de: “".$_SESSION["user"]."”.</h3>";
                    $hora = date("H:i:s");
                    $fecha = date("d-m-Y");
                    echo "<br><h4>Actualmente son las: ".$hora.". del ".$fecha."</h4>";              
                }
            ?>
            <form action="rutaActual.php" method="post" class="home">
                <button type="submit" name="boton_login" class="button login-button">
                    <span class="button-text">Obter ruta actual</span>
                    <i class="button-icon fas fa-chevron-right"></i>
                </button>           
            </form>
            <form action="buscarFichero.php" method="post" class="home">
            <input type="text" name="buscarFichero" class="home2" placeholder="Nombre del fichero" required>
            <button type="submit" name="boton_login" class="button login-button">
                    <span class="button-text">Buscar fichero</span>
                    <i class="button-icon fas fa-chevron-right"></i>
                </button>           
            </form>
            <form action="crearFichero.php" method="post" class="home">
                <?php
                    if ($_SESSION["rol"] === 'clientes') {
                        
                    } else {
                    ?>
                    <input type="text" name="crearFichero" class="home2" placeholder="Nombre del fichero" required>
                    <button type="submit" name="boton_login" class="button login-button">
                        <span class="button-text">Crear fichero</span>
                        <i class="button-icon fas fa-chevron-right"></i>
                    </button> 
                    <?php
                    }
                    ?>
            </form>
            <form action="logout.php" method="get" class="home">
                <button type="submit" name="boton_login" class="button login-button">
                    <span class="button-text">Salir</span>
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