<?php include('php/nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | Pls Fund Us</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <section class="main">
    <h1>Sign In</h1>
    <form class="login" action="php/handleLogin.php" method="post">
      <table>
        <tr>
          <td><label for="username">Username: </label></td>
          <td><input class="loginInput" type="text" name="username"></td>
        </tr>
        <tr>
          <td><label for="password">Password: </label></td>
          <td><input class="loginInput" type="password" name="password"></td>
        </tr>
        <tr>
          <td><label for ="register">New Account?</label></td>
          <td><input class="loginInput" type="checkbox" name="register"></td>
        </tr>
        <tr>
          <td colspan="2"><button type="submit" value ="Submit">Submit</button></td>
        </tr>
      </table>
    </form>
  </section>
</body>
</html>