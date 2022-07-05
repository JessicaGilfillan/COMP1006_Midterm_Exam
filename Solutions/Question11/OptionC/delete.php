<?php

//get the course code to be delete 
$course_code = filter_input(INPUT_GET, 'id'); 

//set up the query 
$sql = "DELETE FROM courses WHERE course_code = :id"; 

//connect to db 
require_once 'connect.php'; 

//prepare query 
$query = $db->prepare($sql); 

//bind 
$query->bindParam(':id', $course_code); 

//execute 
$query->execute(); 

//close the db connection 

$query->closeCursor(); 

//return to index

header('Location: index.php'); 






?>