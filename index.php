<?php
	session_start();

	if (isset($_POST["user"]) && isset($_POST["pass"])) {
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		if ($user === "admin" && $pass === "1234") {
			$_SESSION["user"] = $user;
            $_SESSION["rol"] = "admin"; // Asigno el rol "admin"
			header("Location: home.php");
			exit;
		} elseif ($user === "cliente1" && $pass === "1234"){
            $_SESSION["user"] = $user;
            $_SESSION["rol"] = "clientes"; // Asigno el rol "clientes"
			header("Location: home.php");
			exit;
		} else {
            $error_message = "Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";

        }
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
    
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" action="index.php" method="post">
                <h2>Panel de Administrador</h2>
                <div class="form-field">
                    <i class="icon fas fa-user"></i>
                    <input type="text" class="input" placeholder="Usuario" name="user">
                </div>
                <div class="form-field">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" class="input" placeholder="Contraseña" name="pass">
                </div>
                <button type="submit" name="boton_login">
                    <span class="button-text">Iniciar Sesión</span>
                    <i class="button-icon fas fa-chevron-right"></i>
                </button>
                <?php
					if (isset($error_message)) {
						echo "<p style='color: red; margin-top: 20px; font-weight: bold;'>$error_message</p>";
					}
                ?>      
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
