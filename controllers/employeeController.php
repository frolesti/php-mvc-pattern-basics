<?php

require ('./employeeModel.php');


//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    //
    $queryEmployees = 'SELECT * FROM employees';
    $employees = get($queryEmployees);
    require('views/employee/employeeDashboard.php');
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
    $queryById = 'SELECT * FROM employees WHERE emp_no =' . $request;
    $employee = get($queryById);
    require('views/employee/employee.php');
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}

if (isset($_GET["allEmployees"])){
    getAllEmployees();
}
elseif (isset($_GET["getEmployee"])){
    $request = $_GET["numbers"];
    getEmployee($request);
}