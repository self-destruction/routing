<?php

class db_connect {
    private $pdo;

    /**
     * db_connect constructor.
     */
    public function __construct()
    {
        try {
            $connection_string = "mysql:host=127.0.0.1;port=3307;dbname=test";
            $this->pdo = new PDO($connection_string, 'tais', 'tais', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            echo "Невозможно установить соединение с базой данных" . PHP_EOL . $e->getMessage();
        }
    }

    public function insert_user($name, $email, $username, $password) {
        $salt = random_bytes(22);
        $hash = password_hash($password, PASSWORD_DEFAULT, ['salt' => $salt]);
        $salt = mb_convert_encoding($salt, "UTF-8");
        $query = "INSERT INTO `test`.`users` (name, email, username, password, salt)
                  VALUES (:name, :email, :username, :password, :salt)";
        $result = $this->pdo->prepare($query);
        $result->bindParam(":name", $name, PDO::PARAM_STR);
        $result->bindParam(":email", $email, PDO::PARAM_STR);
        $result->bindParam(":username", $username, PDO::PARAM_STR);
        $result->bindParam(":password", $hash, PDO::PARAM_STR);
        $result->bindParam(":salt", $salt, PDO::PARAM_STR);
        $result->execute();

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}