<?php

class Database
{
    private $servername='eu-cdbr-west-02.cleardb.net';
    private $username='b813991eba3b0d';
    private $password='95b5ce53';
    private $dbname='heroku_8e482e9f8c34bfc';
    private $result=array();
    private $mysqli='';

    public function __construct() {
        $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
    }
    public function insert($table,$para=array()) {
        $table_columns = implode(',', array_keys($para));
        $table_value = implode("','", $para);
        $sql = "INSERT INTO $table($table_columns) VALUES ('$table_value')";
        $result=$this->mysqli->query($sql);
    }
    public function delete ($table,$id) {
        $sql="DELETE FROM $table";
        $sql .=" WHERE $id ";
        $result = $this->mysqli->query($sql) or die('error');

    }
    public function selectAll($table){
        $arr=[];
        $sql = "SELECT * FROM $table";
        $result = $this->mysqli->query($sql);
        while($row = mysqli_fetch_object($result)) {
            $arr[]=$row;
        }
        return json_encode($arr);
    }

    public function __destruct(){
        $this->mysqli->close();
    }
}
?>