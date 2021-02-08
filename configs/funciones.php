<?php
$host_mysql="localhost";
$user_mysql="id15818509_gaby";
$pass_mysql="Gaby=12345678";
$db_mysql="id15818509_repuestos";
$dbport_mysql=3306;
$mysqli=mysqli_connect($conectar_mysql,$host_mysql,$user_mysql,$pass_mysql,$db_mysql,$dbport_mysql);



    function clear($var){
    htmlspecialchars($var);
    return $var;
}


function chick_admin(){
    if(!isset($_SESSION['id'])){
        redir("./");
    }
}

function redir($var){
    ?>
    <script>
    window.location=="<?=$var?>";
    </script>
    <?php
    die();
}

function alert($var){
    ?>
    <script trype="text/javascript">
    alert("<?=$var?>") ;
    </script>
    <?php

}

function check_user($url){
    if(!isset($_SESSION['id_cliente'])){
        redir("?p=login && return=$url");
        
    }
}


function nombre_cliente($id_cliente){
    $mysqli=connect();

    $q=$mysqli->query("SELECT * FROM clientes WHERE id='$id_cliente'");
    $r=mysqli_fetch_array($q);
    return$r['name'];
}


function connect(){
    $host_mysql="localhost";
    $user_mysql="id15818509_gaby";
    $pass_mysql="Gaby=12345678";
    $db_mysql="id15818509_repuestos";
    $dbport_mysql=3306;

    $mysqli=mysqli_connect($conectar_mysql,$host_mysql,$user_mysql,$pass_mysql,$db_mysql,$dbport_mysql);

    return $mysqli;

}
?>