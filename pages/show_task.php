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

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.

$array =  get_object_vars($data);
?>

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="POST">

    <div class="container">
        <div class="form-group">
            <label><b>Owner Email</b></label>
            <input type="text" class="form-control" name="owneremail" value="<?php echo $array['owneremail']?>" required>
        </div>

        <!--<label><b>ownerid</b></label>
        <input type="text"  name="ownerid" value="<?php echo $array['ownerid']?>" required>

        <br>

        <label><b>createddate</b></label>
        <input type="text" name="createddate" value="<?php echo $array['createddate']?>" required>

        <br>-->

        <div class="form-group">
            <label><b>Due Date</b></label>
            <input type="text" class="form-control" value="<?php echo $array['duedate']?>" name="duedate" required>
        </div>

        <div class="form-group">
            <label><b>Message</b></label>
            <input type="text" class="form-control" value="<?php echo $array['message']?>" name="message" required>
        </div>

        <div class="form-group">
            <label><b>Is Done?</b></label>
            <input type="text" class="form-control" value="<?php echo $array['isdone']?>" name="isdone" required>
        </div>

        <button type="submit" class="btn btn-default">Save Edits</button>

        <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
            <button type="submit" form="form1" value="delete" class="btn btn-default">Delete</button>
        </form>
    </div>



</form>




<script src="js/scripts.js"></script>
</body>
</html>