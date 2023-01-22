<?php

class Database
{
    public PDO $connection;
    public $statement;
    private mixed $config;
    private mixed $username;
    private mixed $password;

    public function __construct($config)
    {
        $this->config = $config['config'];
        $this->username = $config['username'];
        $this->password = $config['password'];

        $dsn = "mysql:" . http_build_query($this->config, '', ';');
        $this->connection = new PDO($dsn, $this->username, $this->password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query(string $query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find_or_abort()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}
