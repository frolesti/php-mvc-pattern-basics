<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <title>Employees MySQL</title>
</head>
<body>

    
            <?php
                if($employee[0]["gender"] == "M"){
                    $employee[0]["gender"] = "Male";
                } else {
                    $employee[0]["gender"] = "Female";
                }
                $employeeName = $employee[0]["first_name"] . ' ' . $employee[0]["last_name"];
                echo '<div class="employeeCard">
                        <section class="employeeImageContainer">
                            <img src="assets/img/employee.png" alt="">
                        </section>
                        <section class="employeeName">'. $employeeName . '</section>
                        <section class="employeeInfo">
                            Gender: ' . $employee[0]["gender"].'<br> 
                            Hire Date: '. $employee[0]["hire_date"] .'<br>
                            Birth Date: '. $employee[0]["birth_date"] .'
                        </section>
                    </div>';
            ?>
</body>