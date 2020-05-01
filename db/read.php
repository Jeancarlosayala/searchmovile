<?php
    include 'conexion.php';

    if(!isset($_POST['buscar'])){
        $_POST['buscar'] ="";
        $buscar = $_POST['buscar'];
    }

    $buscar = $_POST['buscar'];

    $SQL_READ = "SELECT * FROM celular WHERE nombre LIKE '%".$buscar."%' OR precio LIKE '%".$buscar."%' ";

    $sql_query = mysqli_query($conn, $SQL_READ);

?>

