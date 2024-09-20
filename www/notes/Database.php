<?php

class Database
{

    private $pdo;
    private $statement;


    function __construct(array $config)
    {
        // Connect to Database
        $dsn = "pgsql:" . http_build_query($config, '', ';');
        $this->pdo = new PDO($dsn, options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        $this->pdo->exec("SET search_path TO notes");
    }


    function query(string $query, mixed ...$parameters)
    {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($parameters);
        return $this;
    }

    function fetch()
    {
        $result = $this->statement->fetch();
        if (!$result) {
            abort();
        }
        return $result;
    }

    function fetchAll()
    {
        $result = $this->statement->fetchAll();
        if (!$result) {
            abort();
        }
        return $result;
    }
}