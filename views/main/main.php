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
    <header class="header_container">
        <h1 class="header_container__title">Welcome to MVC pattern Basics</h1>
    </header>

    <main class="main_container">

    <a class="main_container__allEmployees" href="?controller=employee">All Employees</a>

    <p class="main_container__or">or</p>

    <form action="?controller=employee" method="post" class="main_container__formContainer">
        <input type="text" name ='id' id="id" placeholder="Enter an id" class="main_container_formContainer__inputEmployee">
        <br>
        <input type="submit" value="Submit" class="main_container_formContainer__btnSubmit">
    </form>

    </main>


</body>
</html>