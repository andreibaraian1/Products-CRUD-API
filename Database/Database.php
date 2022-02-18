<?php

class Database
{
    private $servername = 'eu-cdbr-west-02.cleardb.net';
    private $username = 'b813991eba3b0d';
    private $password = '95b5ce53';
    private $dbname = 'heroku_8e482e9f8c34bfc';
    public $mysqli = '';

    public function __construct()
    {
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->mysqli->connect_error) {
            exit('Error connecting to database');
        }
    }
    
    
    public function __destruct()
    {
        $this->mysqli->close();
    }
}
