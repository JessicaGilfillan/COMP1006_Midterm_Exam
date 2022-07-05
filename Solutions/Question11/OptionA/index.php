<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm - Option A - Solution </title>
</head>
<body>
    <?php 
    //connect 
    require_once 'connect.php'; 
    //set up SQL statement 
    $sql = "SELECT * FROM courses"; 
    //prepare the query 
    $statement = $db->prepare($sql); 
    //execute the query 
    $statement->execute();
    //use fetchAll the get the remaining rows from the dataset 
    $courses = $statement->fetchAll(); 
    //loop through the results in an html table 
    echo "<table><tbody>";
    foreach($courses as $course) {
        echo "<tr><td>" . $course['course_code'] . "</td><td>" .  $course['course_name'] . "</td><td>" . $course['course_description'] . "</td><td>" .  $course['course_format']  . "</td></tr>"; 
    }
    //close the table elements 
    echo "</tbody></table"; 
    //close db connection 
    $statement->closeCursor(); 

    ?>   
</body>
</html>