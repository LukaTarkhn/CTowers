<br><br><br><br><br>
<?php if (!empty($_SESSION['user'])): ?>
    <p>You are logged in</p>
    <a href="logout">Log out</a>
<?php endif;?>

<?php if (empty($_SESSION['user'])): ?>
    <p>You are not logged in</p>
<?php endif;?>
<h3>sign in</h3>
<form method="post" action="login" role="form">
    <input type="text" id="username" name="username" class="input-field" placeholder="Username">
    <input type="password" id="password" name="password" class="input-field" placeholder="Password"> <br>
    <button type="submit" class="btn btn-default standard-button red-button">Sign In</button>
</form>

