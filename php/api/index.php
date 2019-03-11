<?php

require 'rb.php';

R::setup( 'mysql:host=localhost;dbname=orders',
getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD') ); 


$result = null;
  // we want to parse routes here

  if($_GET["type"] === "amazon"){
    $result =  R::getAll( 'SELECT * FROM amazon_orders' );
  } 

  if($_GET["type"] === "ebay"){
    $result =  R::getAll( 'SELECT * FROM ebay_orders' );
  } 
  R::close();

  header("Content-type:application/json");
  header("HTTP/1.1 200 Success");

  echo json_encode($result);

?>