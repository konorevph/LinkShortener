<?php
    class DBConnection
    {
        private $host = "localhost", $name = "name", $pwd = "pwd", $DB = "short_links";
        
        private $connection;

        public function connect()
        {
            $this->connection = new mysqli($this->host, $this->name, $this->pwd, $this->DB);
            if ($this->connection->connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                return false;
            }
            return true;
        }

        public function getConn()
        {
            return $this->connection;
        }

        public function close()
        {
            $this->connection->close();
        }
    }
?>