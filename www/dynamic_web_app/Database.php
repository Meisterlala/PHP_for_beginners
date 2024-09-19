<?php

class Database
{

    private $pdo;

    function __construct()
    {
        // Connect to Database
        $dsn = "pgsql:host=db;port=5432;dbname=db;user=user;password=password";
        $this->pdo = new PDO($dsn);
    }


    function fetchAll(string $query): array
    {
        return $this->statement($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    function fetch(string $query)
    {
        return $this->statement($query)->fetch(PDO::FETCH_ASSOC);
    }

    function statement(string $query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}