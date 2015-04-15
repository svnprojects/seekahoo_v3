<?php
$hostname="fetchdbinstance.cwlxojl3c52g.us-east-1.rds.amazonaws.com";
$username="xvalue1";
$password="xValue!23";

$global_dbh = mysql_connect($hostname, $username, $password)
or die("Could not connect to database");
mysql_select_db('Seekahoo_website')
or die("Could not select database");

?>