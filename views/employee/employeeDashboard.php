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
                
                foreach ($employees as $employee) {
                    if($employee["gender"] == "M"){
                        $employee["gender"] = "Male";
                    } else {
                        $employee["gender"] = "Female";
                    }
                    $employeeName = $employee["first_name"] . ' ' . $employee["last_name"];
                    echo '<div class="employeeCard">
                            <section class="employeeImageContainer">
                                <img src="assets/img/employee.png" alt="">
                            </section>
                            <section class="employeeName">'. $employeeName . '</section>
                            <section class="employeeInfo">
                                Gender: ' . $employee["gender"].'<br> 
                                Hire Date: '. $employee["hire_date"] .'<br>
                                Birth Date: '. $employee["birth_date"] .'
                            </section>
                        </div>';
                }

            ?>
</body>
</html>