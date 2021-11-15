<?php

include './function/jsonOperation.php';

$todoName = isset($_POST['todoName']) ? $_POST['todoName'] : false;

if(!empty(trim($todoName))){
    if(file_exists('todo.json')){
        $todos = readJson('todo.json');
    }else{
        $todos = [];
    };

    array_push($todos, $todoName);

    addJson($todos, 'todo.json');
}

header('Location: index1.php');
