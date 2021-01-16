<!DOCTYPE html>
<html>
<head>
<title>Registrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
          <link rel="stylesheet" type="text/css" href="css/style1.css">

   </head> 
<body>
<?php 
    require_once 'connection.php';
    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection->connect_error) die ("Fatal error");

   if(isset($_POST['usuarioCli']) && isset($_POST['contraseñaCliente']))
    {
        $nombre = mysql_entities_fix_string($connection, $_POST['nombre']);
        $apellido = mysql_entities_fix_string($connection, $_POST['apellido']);
        $edad = mysql_entities_fix_string($connection, $_POST['edad']);
        $ciudad= mysql_entities_fix_string($connection, $_POST['ciudad']);
        $usuarioCli = mysql_entities_fix_string($connection, $_POST['usuarioCli']);
        $pw_temp = mysql_entities_fix_string($connection, $_POST['contraseñaCliente']);
       
        $contraseñaCliente = password_hash($pw_temp, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuariocliente VALUES('$nombre','$apellido','$edad', '$ciudad', '$usuarioCli', '$contraseñaCliente')";


        $query = "INSERT INTO usuarioCliente VALUES('$gmail','$pass')";
        $result = $connection->query($query);
        if (!$result) die ("Falló registro");

        echo $query;
        $result = $connection->query($query);
        if (!$result) die ("Falló registro");

        echo "Registro exitoso <a href='index.php'>Ingresar</a>";
        
      }

    
    else {
        echo' <center><br><br><br><br>
   <body>

    <div class="container" id="register">
       <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h2>Registrate</h2>
        </div>
        <div class="panel-body">

        <h4>Nombre: </h4>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre"><br>
        <h4>Apellido: </h4>
        <input type="text" class="form-control" name="apellido" placeholder="Apellido"><br>
        <h4>Edad: </h4>
        <input type="number" class="form-control" name="edad" placeholder="Edad"><br>
        <h4>Ciudad: </h4>
        <input type="text" class="form-control" name="ciudad" placeholder="Ciudad"><br>
        <h4>Usuario: </h4>
        <input type="gmail" class="form-control" name="usuarioClis" placeholder="Usuario"><br>
        <h4>Contraseña: </h4>
        <input type="password" class="form-control" name="contraseñaCliente" placeholder="contraseña"><br>
        
   </div>
   <div class="panel-footer">
        <a href="login.php"><button class="btn btn-primary">Registrarse</button>
        <a href="index.php"><button class="btn btn-warning">Cancelar</button>

         </div>
      </div>
  </div>
                   </center>'; 
}
?>
</body>
</html>