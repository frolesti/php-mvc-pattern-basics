<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista De Usuarios</title>
</head>
<body>

    <table>

        <thead>
            <tr>
                <td>ID</td>
                <td>Employee</td>
                <td>Gender</td>
            </tr>
        </thead>

        <tbody>
            <?php

                foreach ($employees as $employee) {
                    echo "<tr>";
                    echo "<td>". $employee['id'] ."</td>";
                    echo "<td>". $employee['first_name'] . $employee["last_name"] . "</td>";
                    echo "<td>". $employee['gender'] ."</td>";
                    echo "</tr>";
                }

            ?>
        </tbody>

    </table>

</body>
</html>