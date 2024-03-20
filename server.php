<?php

// se riceve un parametro per aggiungere il todo, esegue le operazioni necessarie


if(isset( $_GET['newTodo'] )) {
    // var_dump($_GET['newTodo']);


    // prendo il file json di todo
    $todoContent = file_get_contents('./todo-list.json');


    // lo trasformo in un array
    $todoList = json_decode($todoContent);


    // all'array pusho il nuovo todo che ricevo
    $todoList[] = $_GET['newTodo'];

    // var_dump($todoList);
    // scrivo nel file il nuovo array in formato json
    file_put_contents('./todo-list.json', json_encode($todoList));

    
    // fine 🌟


}





// la lista di todo viene letta da un file esterno
$todoContent = file_get_contents('./todo-list.json');
$todoList = json_decode($todoContent);








// // dobbiamo dire che il nostro file (server.php) quando il server lo renderizza
// // indichi che siano informazioni json

// // copia e incolla
header("Content-Type: application/json");


echo json_encode($todoList);