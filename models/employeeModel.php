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


function get(){

    global $servername;
    global $username;
    global $password;
    global $database;

    $conn = new mysqli($servername, $username,$password, $database);
    $queryEmployees = 'SELECT * FROM employees';
    $selectAll = $conn->query($queryEmployees);


    $result = [];

    $i = 0;
    while( $file = $selectAll->fetch_assoc()){
        $result[$i]=$file;
        $i++;
    }

    return $result;

}

function getById($id){
    global $servername;
    global $username;
    global $password;
    global $database;

    $conn = new mysqli($servername, $username,$password, $database);
    $queryById = 'SELECT * FROM employees WHERE emp_no ='.$id;
    $selectById = $conn->query($queryById);

    $result = [];

    $i = 0;
    while ($file = $selectById->fetch_assoc()) {
        $result[$i]=$file;

    }
    print_r($result);

}
getById(14);