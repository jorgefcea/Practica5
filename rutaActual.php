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
        .screen {
            background: linear-gradient(90deg, #5D54A4, #7C78B8);
            height: auto;
            width: 400px;
            box-shadow: 0px 0px 24px #5C5696;
            text-align: center;
            color: #302d51;
            font-weight: bold;
            padding: 5px;
        }
        button {
            margin-left: 20px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <?php
                echo "<br><br><br>La ruta actual en la que nos encontramos es: <br><br>".getcwd();
            ?>
            <form action="volverAtras.php" method="get" class="home">
                <button type="submit" name="boton_login" class="button login-button">
                    <span class="button-text">Volver</span>
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