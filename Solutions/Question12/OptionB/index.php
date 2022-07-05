<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMP1006 - Midterm - Question 12</title>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php 
        //add serverside validation here - ensure that all form fields are completed and that age and email are valid (i.e an  integer for age and a valid email address)
        if(isset($_POST['submit'])) {
            $name = filter_input(INPUT_POST, 'name'); 
            $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT); 
            $skills = filter_input(INPUT_POST, 'skills'); 
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
            $location = filter_input(INPUT_POST, 'location'); 
    
            if(empty($name) || empty($skills) || empty($location)) {
                echo "<p> All info is required! </p>"; 
            }
            else if (empty($email)) {
                echo "<p> Please provide a valid email address </p>"; 
            }
            else if (empty($age)) {
                echo "<p> Please provide age in numeric format </p>"; 
            }
            else {
                echo "<p> Thanks for filling out the form! </p>"; 
            }
        }

    ?>
    <div class="container">
    <!-- don't forget to add client-side validation -->
    <h1> COMP1006 - Midterm Exam </h1> 
    <p> Please submit the following information. All form fields with an * are required. </p> 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label> Your Full Name *</label>
            <input type="text" name="name" class="form-control" placeholder="Joe Doe" required>
        </div>
        <div class="form-group">
            <label> Your Age *</label>
            <input type="number" name="age" class="form-control" placeholder="42" required>
        </div>
        <div class="form-group">
            <label> Your Skills * </label>
            <input type="text" name="skills" class="form-control" placeholder="painting,art,being chill" required>
        </div>
        <div class="form-group">
            <label> Your Email  *</label>
            <input type="email" name="email" class="form-control" placeholder="someone@email.com" required >
        </div>
        <div class="form-group">
            <label> Your Location * </label>
            <input type="text" name="location" class="form-control" placeholder="Barrie,Ontario" required >
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
</div><!--end container-->
</body>

</html>