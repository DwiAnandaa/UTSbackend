<?php 

const DBHOST = 'localhost';
const DBUSER = 'root';
const DBPASS = '';
const DBNAME = 'ghost';

const DEBUG = false;

mysqli_report(MYSQLI_REPORT_OFF);

error_reporting(0);


if(!$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)) {
  
  if(DEBUG) exit(mysqli_connect_error());
  header("HTTP/1.1 501 Internal Server Error");
  exit();
}

if(DEBUG) {
  error_reporting(E_ALL);
}