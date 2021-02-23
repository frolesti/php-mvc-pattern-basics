<?php

$servername = "localhost";
$username = "root";
$password = '';
$database = "employees";

// Create connection
$conn = new mysqli($servername, $username,$password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo '<br>';

// $id = $_GET['number'];

$queryEmployees = 'SELECT * FROM employees';


// echo $id;

function get($query){

    global $servername;
    global $username;
    global $password;
    global $database;

    $conn = new mysqli($servername, $username,$password, $database);
    $selectAll = $conn->query($query);


    $result = [];

    $i = 0;
    while( $file = $selectAll->fetch_assoc()){
        $result[$i]=$file;
        $i++;
    }

    print_r($result);
    // return $result;

}
get($queryEmployees);

// function getById($id){
//     global $servername;
//     global $username;
//     global $password;
//     global $database;

//     $conn = new mysqli($servername, $username,$password, $database);
//     $selectById = $conn->query($queryById);

//     $result = [];

//     $i = 0;
//     while ($file = $selectById->fetch_assoc()) {
//         $result[$i]=$file;

//     }
//     print_r($result);

// }

// get($queryEmployees);
// get($queryById);