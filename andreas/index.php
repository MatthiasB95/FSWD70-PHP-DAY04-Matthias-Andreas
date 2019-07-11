<?php
  require_once 'class/RunSqlQuery.php';

$runquery = new RunSqlQuery();
$runquery->connectToDb('localhost', 'test', 'root', '');

$runquery->insertInTbl(
  'user', array('userName', 'userPW'), array('fuffi@ka.at', password_hash('zumba', PASSWORD_DEFAULT)));
