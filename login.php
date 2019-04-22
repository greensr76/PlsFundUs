<?php include('php/nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login | Pls Fund Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <section class = "main">

    <form class = "login" action = "php/handleLogin.php" method = "post">
      <h1> Sign In </h1>
      <div id = "labels">
        <label for="username">Username: </label> <br>
        <label for="password">Password: </label> <br>
        <label for ="register"> Make An Account? </label>
      </div>

      <div id = "inputs">
        <input class = "loginInput" type="text" name="username" align="right"> <br>
        <input class = "loginInput" type="password" name="password" align="right"> <br>
        <input class = "loginInput" type = "checkbox" name = "register" align = "right"><br>

      </div>
      <input style="float:right" type="submit" value ="Submit"> </button>

    </form>
  </section>
</body>
</html>