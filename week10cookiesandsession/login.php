<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>

</head>
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="checklogin.php">
        <label>Username:</label><br>
        <input required type="text" name="username" placeholder="username"/><br><br>
        <label>Password:</label><br>
        <input required type="password" name="password" placeholder="password"/>
        <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
</div>
</body>
</html>