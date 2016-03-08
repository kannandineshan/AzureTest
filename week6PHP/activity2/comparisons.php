<!DOCTYPE html>
<html>
<head>

</head>

<body>


<p>

    <form action="" method="post">

            <label for="name">Name:</label>
            <input type="text" name="name">
            <label for="age">Age:</label>
            <input type="number" name="age">
            <input type="submit">

    </form>



    <?php


        $myname = $_POST['name'];
        $myage = $_POST['age'];


    if($myage >= 21) {


        echo $myname.""."buy sausage rolls if you are over 21";

    }

    elseif($myage>=18){

        echo $myname.""."buy mugs if you are over 18,";
    }

    elseif($myage>=16){

        echo $myname.""."buy specs if you are over 16,";
    }

    else{
        echo $myname.""."you are under age";
    }


    ?>

















</p>




</body>















</html>