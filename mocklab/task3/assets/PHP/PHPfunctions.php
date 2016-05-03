<?php
include("connection.php");


function getheader(){

    $header = $_GET["header"];

    echo $header;
}


function getbugsdetails(){



    $bugCategory = $_GET["bugCategory"];


    if($bugCategory == null){

        $sql = "SELECT * FROM bugs";

        $result = mysqli_query($db,$sql);

        $db->close();

        return $result;

    }else{

        $sql = "SELECT * FROM bugs WHERE bugCategory = '$bugCategory'";

        $result = mysqli_query($db,$sql);

        $db->close();

        return $result;
    }
}
