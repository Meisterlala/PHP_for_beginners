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
        $this->pdo->exec("SET search_path TO notes");
    }


    function query(string $query, mixed...$parameters)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($parameters);
        return $statement;
    }
}