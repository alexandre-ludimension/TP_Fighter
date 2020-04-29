<?php

// include model
require_once "Model/Fighter.php";
require_once "Model/DAO.php";

//include view
require_once "View/ViewLobby.php";

$DAO = DAO::get();

$lBrutus = $DAO->getFighter("Brutus");
$lMerlin = $DAO->getFighter("Merlin");
$lTyrion = $DAO->getFighter("Tyrion");


// display fighters and screen
$LobbyView = new ViewLobby("Le combat des chefs");
$LobbyView->displayPlayerSelectionScreen($lBrutus, $lMerlin, $lTyrion);

// rien d'autre à faire, cette view va permettre 
// au joueur d'appeler le bon controler
