<?php include('php/nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Fund | Pls Fund Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="javascript/buildFund.js"></script>
</head>
<body>
    <section class="main">
        <h1>This is a poll</h1>
        <br>
        <p>TODO:</p>
        <ul>
            <li>Import all data for this fund id from the database</li>
        </ul>
        <section id = "progressShell">
          <section id = "progressBar">
            <span> Raised: $ </span>
          </section>
          <span> Goal: $$$ </span>
        </section>

        <br>

        <form >
            <p> Donate: </p>
            <input type = "text" name = "donate"> </input>
            <button type="submit">Submit</button>


        </form>

    </section>




</body>
</html>
