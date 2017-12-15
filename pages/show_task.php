<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

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
        <label><b>owneremail</b></label>
        <input type="text" name="owneremail" value="<?php echo $array['owneremail']?>" required>

        <br>

        <label><b>ownerid</b></label>
        <input type="text"  name="ownerid" value="<?php echo $array['ownerid']?>" required>

        <br>

        <label><b>createddate</b></label>
        <input type="text" name="createddate" value="<?php echo $array['createddate']?>" required>

        <br>

        <label><b>duedate</b></label>
        <input type="text"  name="duedate" value="<?php echo $array['duedate']?>" required>

        <br>

        <label><b>message</b></label>
        <input type="text"  name="message" value="<?php echo $array['message']?>" required>

        <br>

        <label><b>isdone</b></label>
        <input type="text"  name="isdone" value="<?php echo $array['isdone']?>" required>

        <br>

        <button type="submit">Edit</button>
    </div>



</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>