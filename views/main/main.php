<!-- This is the main generic view of your application, it's not required to use it -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
        <a href="?controller=employee">All Employees</a>

    <form action="?controller=employee" method="post">
        <input type="text" name ='id' id="id" placeholder="Put your Id">
        <input type="submit" value="Submit">
    </form>
</body>
</html>