<?php 
require_once(__DIR__."/../core/App.php");
App::start();
function console(mixed $data) : void {
    ob_start(); #démarre la capture du flux de sortie
    var_dump($data);
    $debug_str = ob_get_clean(); #Capture le flux de sortie et l'efface
    file_put_contents("php://stdout", $debug_str);
}



?>

<h1>My first MVC</h1>