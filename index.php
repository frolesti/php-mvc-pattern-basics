<?php
// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

require_once "config/constants.php";
// require_once 'controllers/employeeController.php';
// include_once VIEWS . 'main/main.php';
// echo MODELS;

if(isset($_GET["controller"])){
    $controller = convertir($_GET['controller']);

    if(file_exists($controller)){
        include $controller;
    }

}else{
    // echo MODELS;
    require_once VIEWS . 'main/main.php';
}

function convertir($name){
    $controller = CONTROLLERS . $name . 'Controller.php';

    return $controller;

}


// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.
?>

