<?php

$todos = [
    "Parlare dell'avviso riguardo bonus",
    "Riunione insegnanti ore 15:00",
    "Preparare lezione giovedì",
];

// dobbiamo dire che il nostro file (server.php) quando il server lo renderizza
// indichi che siano informazioni json

// copia e incolla
header("Content-Type: application/json");


echo json_encode($todos);