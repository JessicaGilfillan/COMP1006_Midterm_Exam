<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Course Schedule</title>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h1> Your Courses </h1>
            <header>
                <?php
                //connect to db - add your credentials here. 
                $dsn = 'mysql:host=localhost;dbname=COMP1006_Summer2022';
                //username
                $username = 'root';
                //password
                $password = 'root';
                $db = new PDO($dsn, $username, $password);
                //set the errormode to exception 
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //set up query 
                $sql = "SELECT * FROM courses";

                //prepare
                $statement = $db->prepare($sql);

                //execute 
                $statement->execute();

                //use fetchAll to fetch the remaining rows from a result set
                $courses = $statement->fetchAll();

                //dynamically build a table and loop through the results 

                echo "<table class='table table-striped'><tbody>";

                foreach ($courses as $course) {
                    echo "<tr><td>" . $course['course_code'] . "</td><td>" . $course['course_name'] . "</td><td>" . $course['course_description'] . "</td><td>" . $course['course_format'] . "</td></tr>";
                }

                echo "</tbody></table>";

                //close cursor 
                $statement->closeCursor();
                ?>
    </div>
    <!--end container-->

</body>

</html>