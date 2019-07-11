<?php
  require_once 'class/RunSqlQuery.php';

$runquery = new RunSqlQuery();
$runquery->connectToDb('localhost', 'root', '', 'cr09_andreas_harasztosi_carrental');

$runquery->insertInTbl(
  'user', array('userName', 'userPW'), array('zumpfi@ka.at', password_hash('mama', PASSWORD_DEFAULT)));
