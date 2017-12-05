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

<?php  $array =  get_object_vars($data);  ?>

<form action="index.php?page=accounts&action=edit" method="POST">

    <div class="container">
        <label><b>email</b></label>
        <input type="text" name="email" value="<?php echo $array['email']?>" required>

        <br>

        <label><b>firstname</b></label>
        <input type="text"  name="fname" value="<?php echo $array['fname']?>" required>

        <br>

        <label><b>lastname</b></label>
        <input type="text" name="lname" value="<?php echo $array['lname']?>" required>

        <br>

        <label><b>phone</b></label>
        <input type="text"  name="phone" value="<?php echo $array['phone']?>" required>

        <br>

        <label><b>birthday</b></label>
        <input type="text"  name="birthday" value="<?php echo $array['birthday']?>" required>

        <br>

        <label><b>gender</b></label>
        <input type="text"  name="gender" value="<?php echo $array['gender']?>" required>

        <br>

        <label><b>password</b></label>
        <input type="text"  name="password" value="<?php echo $array['password']?>" required>

        <button type="submit">Edit</button>
    </div>



</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>

<script src="js/scripts.js"></script>
</body>
</html>