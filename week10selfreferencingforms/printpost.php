<?php

$title = $_POST["title"];
$content = $_POST["content"];
$animals = $_POST["animals"];




echo
    "<article>
    <h1>{$title}</h1>
    <p>{$content}</p>
    <strong>{$animals}</strong>
    </article>";
?>