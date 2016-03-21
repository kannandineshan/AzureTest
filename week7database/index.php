<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.post("demo_test_post.asp",
                    {
                        name: "Donald Duck",

                    },
                    function(data,status){
                        alert("Data: " + data + "\nStatus: " + status);
                    });
            });
        });
    </script>
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

    <button>Send an HTTP POST request to a page and get the result back</button>


<div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
</div>


</body>
</html>