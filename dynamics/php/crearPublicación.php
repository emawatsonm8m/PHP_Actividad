<?php
    $include = include("./config.php");
    $con = connect();

    if($include && $con){
        //$descripccion = (isset)
        $ID_USUARIO = 1;
        $descripccion = "Descripcción nueva";
        $fecha = "08/06/2023";
        $hora = "10:58";
        $corazon = 1;
        $n_comentarios = 3;
        $n_retuits = 5;

        //$peticion = "INSERT INTO publicacion VALUES(0, 1, '$descripccion', '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits )";
        //$query = mysqli_query($con, $peticion);

        //$sql = "SELECT * FROM USUARIOS";
        //$query = mysqli_query($con, $sql);

        //$sql = "SELECT * FROM publicacion";
        //$query = mysqli_query($con, $sql);

        $sql = "SELECT * FROM publicacion WHERE ID_PUB > 0 && ID_PUB < 5";
        $query = mysqli_query($con, $sql);

        //var_dump($query);

        //$datos = mysqli_fetch_array($query);

        //var_dump($datos);

        //$datos = mysqli_fetch_assoc($query);

        //var_dump($datos);
        //echo "<br>";
        //echo "<br>";
        //echo "<br>";

        //$datos = mysqli_fetch_assoc($query);

        //var_dump($datos);
        //echo "<br>";
        //echo "<br>";
        //echo "<br>";
        
        //$datos = mysqli_fetch_assoc($query);

        //var_dump($datos);

        //al repetirlos nos va dando el siguiente registro

        //con while

        while($row = mysqli_fetch_assoc($query)){

            echo "<br>";

            //var_dump( $row["descripcion"]);
            var_dump( $row["n_comentarios"]);
            //var_dump($row);
        }

    }
?>