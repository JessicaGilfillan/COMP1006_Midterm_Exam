<?php

//store values from form 

$first_name = filter_input(INPUT_POST, 'first_name'); 
$last_name = filter_input(INPUT_POST, 'last_name'); 
$email = filter_input(INPUT_POST, 'email'); 
$location = filter_input(INPUT_POST, 'location'); 

//set up INSERT query 

$sql = "INSERT INTO people (first_name, last_name, location, email_address) VALUES (:first_name, :last_name, :location, :email_address)"; 

//connect 
require_once 'connect.php'; 

//prepare the query 
$query = $db->prepare($sql); 

//bind parameters 
$query->bindParam(":first_name", $first_name); 
$query->bindParam(":last_name", $last_name); 
$query->bindParam(":location", $location); 
$query->bindParam(":email_address", $email); 

//execute 
$query->execute(); 

//close db connection 
$query->closeCursor(); 


?>