<?php
include './function/jsonOperation.php';

$todos = [];

if(file_exists('todo.json')){
    $todos = readJson('todo.json');
}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>ToDoList</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/kosz.css" type="text/css" />
</head>

<body>

    <main>

        <h1>ToDo Lista</h1>

        <form action="newtodo.php" method="POST" autocomplete="off">

            <input type="text" name="todoName" placeholder="Wpisz nowe zadanie">
            <input type="submit" value="Dodaj">

        </form>

        <div>

            <?php foreach ($todos as $index => $todo) : ?>

                <div class="wyswietlanie">
                    
                    <?php echo $todo; ?>

                    <a href="delete.php?deleteTodo=<?php echo $index;?>"><i class="icon-trash"></i></a>
            
                </div>

            <?php endforeach; ?>

        </div>
    </main>

</body>

</html>