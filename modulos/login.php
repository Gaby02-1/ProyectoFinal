<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        $un_temp= mysql_entities_fix_string($connection, $_POST['usuarioCli']);
        $pw_temp =mysql_entities_fix_string($connection, $_POST['contraseñaCliente']);
        $query = "SELECT * FROM usuarioCliente WHERE usuarioCli='$un_temp'";
        $result = $connection->query($query);
        if (!$result) die ("Usuario no encontrado");
        elseif ($result->num_rows)
           Echo "<center><br><br><br><br><br><br><br><br>
        <a href='index.php'>ESCRIBIR TU DIARIO</a>
        </center>";  
        else
        echo"<center><br><br><br><br><br>
                    USUARIO O PASSWORD INCORRECTO<br><br>
                     <a href='registrar.php'>REGISTRATE</a>
                  </center><br>";

        }
     else{
        echo' <center><br><br><br><br>

     <div class="container" id="login">
        <div class="panel panel-primary">
           <div class="panel-heading text-center">
             <h2>Login</h2>
         </div>
         <div class="panel-body">

         <h4>Usuario: </h4>
         <input type="gmail" class="form-control" name="usuarioCli" placeholder="Usuario"><br>
         <h4>Contraseña: </h4>

         <input type="password" class="form-control" name="contraseñaCliente" placeholder="contraseña"><br>
    </div>
    <div class="panel-footer">
         <button class="btn btn-primary">Ingresar</button>
         <a href="registrar.php"><button class="btn btn-warning">Registrar</button>

          </div>
       </div>
   </div> 
            </center>'; 
     }
    ?>

  </body>
  </html>

