<?php

include './function/jsonOperation.php';

$todos = readJson('todo.json');

unset($todos[$_GET['deleteTodo']]);

addJson($todos, 'todo.json');

header('Location: index1.php');

