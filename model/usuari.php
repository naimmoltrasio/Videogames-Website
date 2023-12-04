<?php

    function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");
        $sql = 'SELECT id_usuari, mail, password, photo 
        FROM "public"."Usuario"
        WHERE mail = $1';
        $param = [$email];

        $query = pg_query_params($conn, $sql, $param);
        $consulta = pg_fetch_row($query);

        if(password_verify($password, $consulta[2])) {
            $_SESSION['mail'] = $consulta[1];
            $_SESSION['password'] = $consulta[2];
            $_SESSION['id_usuari'] = $consulta[0];
            $_SESSION['photo'] = $consulta[3];

            $_SESSION['carrito'] = [];
            $_SESSION['precio_total'] = 0;
            $_SESSION['elementos_totales'] = 0;

            header('Location:/../index.php');
        }else{
            echo "Correo o contraseña incorrecta";
        }

    }

    function register($name, $password, $email, $Domicilio, $Poblacion, $CP): bool
    {
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");

        // Encrypt password, hash
        $passHashed = password_hash($password, PASSWORD_DEFAULT);


        $query='INSERT INTO "public"."Usuario"(mail, password, nombre ,domicilio, poblacion, codigopostal) 
                   VALUES ($1, $2, $3, $4, $5, $6)';
        // query -> name, passHashed...
        // INSERT into USER ...
        $params = [$email, $passHashed, $name, $Domicilio, $Poblacion, $CP];

        $result = pg_query_params($conn, $query, $params);
        if($result) {
            return true;
        }else{
            return false;
        }
    }

    function recuperarDatosUsuario(){
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");
        $sql = 'SELECT * FROM "public"."Usuario"
        WHERE mail = $1';
        $param = [$_SESSION['mail']];
        $consulta = pg_query_params($conn, $sql, $param);
        return pg_fetch_row($consulta);
    }

    function modificarDatos(){
        $conn = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-c6 user=tdiw-c6 password=sY8iFMW2") or die ("ERROR: No se ha podido conectar a la BD");
        $mail = $_POST['Correo'];
        $passwordXifrada = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nombre = $_POST['Nombre'];
        $domicilio = $_POST['Direccion'];
        $poblacion = $_POST['Poblacion'];
        $codigopostal = $_POST['CP'];

        $sql = 'UPDATE "public"."Usuario" SET mail=$1, password = $2, nombre = $3, domicilio = $4, poblacion = $5, codigopostal = $6 
                WHERE mail=$1';
        $params = [$mail, $passwordXifrada, $nombre, $domicilio, $poblacion, $codigopostal];
        $result1 = pg_query_params($conn, $sql, $params);


        $_SESSION['mail'] = $mail;
        $_SESSION['password'] = $passwordXifrada;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['domicilio'] = $domicilio;
        $_SESSION['poblacion'] = $poblacion;
        $_SESSION['codigopostal'] = $codigopostal;

        $photo = $_SESSION['mail'].".png";
        if((isset($_FILES['foto'])) && (!empty($_FILES['foto']))){
            move_uploaded_file($_FILES['foto']['tmp_name'],"/home/TDIW/tdiw-c6/public_html/img/fotoperfil/".$photo);
        }
        $_SESSION['photo'] = $photo;
        $sq = 'UPDATE "public"."Usuario" SET photo=$1 WHERE mail=$2';
        $param = [$photo, $mail];
        $result2 = pg_query_params($conn, $sq, $param);

        // Cerrar la conexión a la BD
        //pg_close($conn);

    }
