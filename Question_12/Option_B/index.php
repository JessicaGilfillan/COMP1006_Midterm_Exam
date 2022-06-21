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
        //add serverside validation here - ensure that all form fields are completed and that age and email are valid (i.e an integer for age and a valid email address)


    ?>
    <div class="container">
    <!-- don't forget to add client-side validation -->
    <h1> COMP1006 - Midterm Exam </h1> 
    <p> Please submit the following information. All form fields with an * are required. </p> 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label> Your Full Name *</label>
            <input type="text" name="name" class="form-control" placeholder="Joe Doe">
        </div>
        <div class="form-group">
            <label> Your Age *</label>
            <input type="text" name="age" class="form-control" placeholder="42">
        </div>
        <div class="form-group">
            <label> Your Skills * </label>
            <input type="text" name="skills" class="form-control" placeholder="painting,art,being chill" >
        </div>
        <div class="form-group">
            <label> Your Email  *</label>
            <input type="text" name="email" class="form-control" placeholder="someone@email.com" >
        </div>
        <div class="form-group">
            <label> Your Location * </label>
            <input type="text" name="location" class="form-control" placeholder="Barrie,Ontario" >
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
</div><!--end container-->
</body>

</html>