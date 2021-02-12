<?php

$errores = '';

if(isset($_POST['submit'])){
    $name = $_POST['nombre'];
    $surname = $_POST['apellido'];
    $email = $_POST['correo'];

    if(!empty($name)){
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        echo "Name: $name <br/>";

    }else{
        $errores .= "Por favor introduzca su nombre.</br>";
    }

    if(!empty($surname)){
        $surname = filter_var($surname, FILTER_SANITIZE_STRING);
        echo "Apellido $surname <br/>";
    }else{
        $errores .= "Por favor introduzca su apellido.<br/>";
    }

    if(!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo "Email $email </br>";
    }else{
        $errores .= "Por favor introduzca su email.<br/>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<form action="index.php" method="POST">
    <input type="text" name="nombre" placeholder="Name:"/><br/><br/>
    <input type="text" name="apellido" placeholder="Surname:"/><br/><br/>
    <input type="email" name="correo" placeholder="Email:"/><br/><br/>
    
<?php if(!empty($errores)): ?>
    <div class="error"><?php echo $errores; ?></div>
<?php endif; ?>

    <input type="submit" name="submit" value="Submit" id="submit"/>
</form>
    
</body>
</html>