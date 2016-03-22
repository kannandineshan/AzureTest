<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
<form>
        <label>Username:</label><br>
        <input id="username" type="text" name="username" placeholder="username"
            /><br><br>
        <label>Password:</label><br>
        <input id="password" type="password" name="password" placeholder="password" />
        <br><br>
        <input id="submit" type="button" name="submit" value = "login"/>
    <script src="submitsurvey.js"></script>
</form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
</div>
</body>
</html>