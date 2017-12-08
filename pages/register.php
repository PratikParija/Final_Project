<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>


<form action="index.php?page=accounts&action=store" method="POST">

    <div class="container">
        <h2>Register</h2>

        <div class="form-group">
            <label><b>email</b></label>
            <input type="text" class="form-control" placeholder="Enter email" name="email" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>firstname</b></label>
            <input type="text" class="form-control" placeholder="Enter firstname" name="fname" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>lastname</b></label>
            <input type="text" class="form-control" placeholder="Enter lastname" name="lname" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>phone</b></label>
            <input type="text" class="form-control" placeholder="Enter phone number" name="phone" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>birthday</b></label>
            <input type="text" class="form-control" placeholder="Enter birthday" name="birthday" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>gender</b></label>
            <input type="text" class="form-control" placeholder="Enter gender" name="gender" required>
        </div>
        <!-- <br> -->

        <div class="form-group">
            <label><b>password</b></label>
            <input type="text" class="form-control" placeholder="Enter password" name="password" required>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </div>



</form>






<script src="js/scripts.js"></script>
</body>
</html>