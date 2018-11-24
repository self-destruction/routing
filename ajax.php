<?php

function getCategory() {
    $category = $_POST['category'];
        $content = file_get_contents("source.json");
    $json = json_decode($content);
    $quiz = $json->{'quiz'}->{$category};
    echo  json_encode($quiz);
}

$index = $_POST['index'];
switch ($index) {
    case 1: getCategory(); break;
}