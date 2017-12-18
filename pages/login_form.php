<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<div class="container">
<form class="form-signin" action="index.php?page=accounts&action=login" method="POST">
    <h2 class="form-signin-heading">Please sign in</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
</form>

<h1><a href="index.php?page=accounts&action=register">Register</a></h1>
</div>