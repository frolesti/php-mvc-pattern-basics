<?php
// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

include_once "config/constants.php";
require_once 'controllers/employeeController.php';



// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="controllers/employeeController.php" method="get">
        <input type="submit" value="allEmployees" name="allEmployees">
        <input type="text" name ='number' id="number" placeholder="Put your Id">
        <input type="submit" value="Submit" name="getEmployee">
    </form>
</body>
</html>