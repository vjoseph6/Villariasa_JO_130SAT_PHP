<?php
class Database
{
    public $connection;
    public function __construct()
    {
        // If have password in my OWN pc (MYSQL)
        // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=09285980040;charset=utf8mb4";

        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
