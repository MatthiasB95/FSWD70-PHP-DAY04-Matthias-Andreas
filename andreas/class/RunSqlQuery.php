<?php

  class RunSqlQuery {
    public $hostname = 'localhost';
    public $dbuser = 'root';
    public $dbname = 'cr09_andreas_harasztosi_carrental';
    public $dbpw = '';
    public $mysqli = '';

    public function connectToDb($hostname, $dbuser, $dbpw, $dbname) {
      $this->mysqli = mysqli_connect($hostname, $dbuser, $dbpw, $dbname);
      //$mysqli = new mysqli($hostname, $dbuser, $dbname, $dbpw);
      //$mysqli = $mysqli->connect_errno ? die('Failed to connect to MySQL: ' . $mysqli->connect_error) : $mysqli;
      if ($this->mysqli->connect_errno) {
         die('Failed to connect to MySQL: ' . $mysqli->connect_error);
      }
    } // end: connectToDb

    public function insertInTbl($tblName, $columnName, $values ) {
      $columnNameStr =  implode($columnName, ', ');
      $valueStr = implode($values, "', '");
      $sql = "INSERT INTO " . $tblName . "(" . $columnNameStr . ") VALUES ('" . $valueStr . "');";
      if (mysqli_query($this->mysqli, $sql)) {
        echo "Table insert succeed.";
      } else {
        echo "Table insert failed for:<br><b>" . $sql . "</b><br>" . mysqli_error($this->mysqli);
      }
    } // end: insertInTbl

    public function createTbl() {

    }
  }
