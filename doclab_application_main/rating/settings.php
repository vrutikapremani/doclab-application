<?php 
$rating_tableName     = 'ratings';
$rating_unitwidth     = 15;
$rating_dbname        = 'db_doclab';
$units=5;
function connect(){
$host="localhost";
$uname="root";
$pass="";
$rating_dbname			= 'db_doclab';

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


