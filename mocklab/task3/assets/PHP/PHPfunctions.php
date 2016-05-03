<?php
/**
 * Created by PhpStorm.
 * User: Dinesh
 * Date: 01/05/2016
 * Time: 22:18
 */

function getheader(){

    $header = $_GET["header"];

    echo $header;
}


function getbugsdetails(){

    include("connection.php");

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
