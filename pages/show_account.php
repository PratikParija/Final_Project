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

<?php  $array =  get_object_vars($data);  ?>

<form action="index.php?page=accounts&action=edit" method="POST">

    <div class="container">
        <div class="form-group">
            <label><b>email</b></label>
            <input type="text" class="form-control" name="email" value="<?php echo $array['email']?>" required>
        </div>

        <div class="form-group">
            <label><b>firstname</b></label>
            <input type="text" class="form-control" name="fname" value="<?php echo $array['fname']?>" required>
        </div>

        <div class="form-group">
            <label><b>lastname</b></label>
            <input type="text" class="form-control" name="lname" value="<?php echo $array['lname']?>" required>
        </div>

        <div class="form-group">
            <label><b>phone</b></label>
            <input type="text" class="form-control" name="phone" value="<?php echo $array['phone']?>" required>
        </div>

        <div class="form-group">
            <label><b>birthday</b></label>
            <input type="text" class="form-control" name="birthday" value="<?php echo $array['birthday']?>" required>
        </div>

        <div class="form-group">
            <label><b>gender</b></label>
            <input type="text" class="form-control" name="gender" value="<?php echo $array['gender']?>" required>
        </div>

        <div class="form-group">
            <label><b>password</b></label>
            <input type="text" class="form-control" name="password" value="<?php echo $array['password']?>" required>
        </div>

        <button type="edit" class="btn btn-default">Edit</button>

    </div>



</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <div class="container">
        <button type="submit" class="btn btn-default" form="form1" value="delete">Delete</button>
    </div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>