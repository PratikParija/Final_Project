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


<form action="index.php?page=tasks&action=store" method="POST">

    <div class="container">
        <h2>New Task</h2>

        <div class="form-group">
            <label><b>Owner Email</b></label>
            <input type="text" class="form-control" placeholder="Enter owner email" name="owneremail" required>
        </div>

        <!-- <br> -->

       <!-- <div class="form-group">
            <label><b>ownerid</b></label>
            <input type="text" class="form-control" placeholder="Enter ownerid" name="ownerid" required>
        </div>-->

        <!-- <br> -->

        <!--<div class="form-group">
            <label><b>createddate</b></label>
            <input type="text" class="form-control" placeholder="Enter created date" name="createddate" required>
        </div>-->

        <!-- <br> -->

        <div class="form-group">
            <label><b>Due Date</b></label>
            <input type="text" class="form-control" placeholder="Enter due date" name="duedate" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>Message</b></label>
            <input type="text" class="form-control" placeholder="Enter message" name="message" required>
        </div>

        <!-- <br> -->

        <div class="form-group">
            <label><b>Is Done?</b></label>
            <input type="text" class="form-control" placeholder="Enter isdone" name="isdone" required>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </div>



</form>






<script src="js/scripts.js"></script>
</body>
</html>