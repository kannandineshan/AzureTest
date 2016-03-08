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



    if($myage >= 16) {

        echo "buy specs if you are over 16,";
    }

    elseif($myage>=18){

        echo "buy mugs if you are over 18,";
    }

    elseif($myage>=21){

        echo "buy sausage rolls if you are over 21";
    }


    ?>

















</p>




</body>















</html>