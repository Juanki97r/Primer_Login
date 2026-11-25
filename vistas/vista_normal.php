<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Login</title>
    <style>
        .enlace{border:none;background:none;color:blue;text-decoration: underline;cursor: pointer;}
    </style>
</head>
<body>
    <h1>Primer Login</h1>
    <form action="index.php" method="post">
        <p>Bienvenido <strong><?php echo $datos_usu_log["nombre"];?></strong> - <button type="submit" class='enlace' name="btnCerrarSesion">Salir</button></p>
    </form>
     <h2>Tus datos:</h2>
    <p>Id: <strong><?php echo $datos_usu_log["id_usuario"];?></strong></p>
    <p>Usuario: <strong><?php echo $datos_usu_log["usuario"];?></strong></p>
    <p>Clave: <strong>**************</strong></p>
    <p>Nombre: <strong><?php echo $datos_usu_log["nombre"];?></strong></p>
    <p>Dni: <strong><?php echo $datos_usu_log["dni"];?></strong></p>
    <p>Sexo: <strong><?php echo $datos_usu_log["sexo"];?></strong></p>
    <p>Foto: <strong><?php echo $datos_usu_log["foto"];?></strong></p>
</body>
</html>