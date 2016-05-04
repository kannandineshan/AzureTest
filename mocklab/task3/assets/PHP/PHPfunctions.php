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

    $bugCategory = $_GET["bugCategory"];


    if($bugCategory == null){

        $sql = "SELECT * FROM bugs";

        $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        $result = mysqli_query($mysqli,$sql);

        $mysqli->close();

        return $result;
    }else{

        $sql = "SELECT * FROM bugs WHERE bugCategory = '$bugCategory'";

        $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        $result = mysqli_query($mysqli,$sql);

        $mysqli->close();

        return $result;
    }
}
