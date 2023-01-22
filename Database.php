<?php

class Database
{
    public PDO $connection;
    private mixed $config;
    private mixed $username;
    private mixed $password;

    public function __construct($config)
    {
        $this->config = $config['database']['config'];
        $this->username = $config['database']['username'];
        $this->password = $config['database']['password'];

        $dsn = "mysql:" . http_build_query($this->config, '', ';');
        $this->connection = new PDO($dsn, $this->username, $this->password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query(string $query, $params = []): false|PDOStatement
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
