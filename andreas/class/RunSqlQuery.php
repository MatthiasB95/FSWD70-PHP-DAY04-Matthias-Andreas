<?php

  class RunSqlQuery {
    public $hostname = 'localhost';
    public $dbuser = 'root';
    public $dbname = '';
    public $dbpw = '';

    public function connectToDb () {
      $mysqli = new mysqli($this->hostname, $this->dbuser, $this->dbname, $this->dbpw);
      //$mysqli = $mysqli->connect_errno ? die('Failed to connect to MySQL: ' . $mysqli->connect_error) : $mysqli;
      if ($mysqli->connect_errno) {
         die('Failed to connect to MySQL: ' . $mysqli->connect_error);
      } else {
        return $mysqli;
      }
    } // end: connectToDb

    public function insertInTbl($tblName, $columnName , $values ) {
      $columnNameStr =  implode($columnName, ', ');
      $valueStr = implode($values, "', '");
      $sql = "INSERT INTO " . $tblName . "(" . $columnNameStr . ") VALUES ('" . $valueStr . "');";
      if (mysqli_query($this->connectToDb(), $sql)) {
        echo "Table insert succeed.";
      } else {
        echo "Table insert failed for:<br><b>" . $sql . "</b><br>" . mysqli_error($this->connectToDb());
      }
    } // end: insertInTbl

    public function createTbl() {

    }
  }
