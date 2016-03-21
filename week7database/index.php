<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>PHP Login Form without Session</h1>
<div class="loginBox">
<h3>Login Form</h3>
<br><br>

<label>Username:</label>
<br>
<input id="name" type="text" name="username" placeholder="username"/>
<br><br>
<label>Password:</label><br>
<input  id="password" type="password" name="password" placeholder="password"/>
<br><br>
<input type="button" name="button" value ="login" );"/>

    <script>$('#button').on('click', function(){
            $.post('week7database/login.php', {'post': value}, function(data){
                if(data !== 0) {

                }
            }, "json");
        });</script>

<div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
</div>


</body>
</html>