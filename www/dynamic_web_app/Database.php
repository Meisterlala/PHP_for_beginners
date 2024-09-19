<?php

class Database
{

    private $pdo;

    function __construct(array $config)
    {
        // Connect to Database
        $dsn = "pgsql:" . http_build_query($config, '', ';');
        $this->pdo = new PDO($dsn, options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        $this->pdo->exec("SET search_path TO dynamic_web_app");
    }


    function fetchAll(string $query): array
    {
        return $this->statement($query)->fetchAll();
    }

    function fetch(string $query)
    {
        return $this->statement($query)->fetch();
    }

    function statement(string $query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}