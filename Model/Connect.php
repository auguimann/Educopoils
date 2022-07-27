<?php

class Connect {

    public function connect(): PDO {

        $user = 'portFolioAdmin';
        $pass = 'admin';

        try {

            $conn = new PDO('mysql:host=127.0.0.1;dbname=portfolio;charset=UTF8', $user, $pass, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        } catch (PDOExeption $e) {

            echo 'Erreur : ' . $e->getMessage() . '<br>';
            die();

        }

        return $conn;

    }

}

?>
