<?php

    namespace App\Core;

    require_once '../app/config/app.php';

    class Database
    {
        protected $connection;

        public function __construct()
        {
            $this->connection = new \mysqli(
             DB_HOST,
             DB_USER,
             DB_PASSWORD,
             DB_NAME
            );

            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }

        public function query(string $sql)
        {
            return $this->connection->query($sql);
        }

        public function __destruct()
        {
            $this->connection->close();
        }
    }

?>