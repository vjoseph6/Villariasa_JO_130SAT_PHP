<?php

class Database
{
    public $connection;


    // MYSQL have own password in my own pc
    // public function __construct($config, $username = 'root', $password = '09285980040')


    public function __construct($config, $username = 'root', $password = '09285980040')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}
