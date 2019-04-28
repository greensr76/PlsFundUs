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
        <section class="fundInfo">
            <img class="fundImg" src="images/test.png">
            <section>
                <h1 id="fundName">This is a poll name</h1>
                <p id="desc">This is a description</p>
            </section>
        </section>
        <br/>
        <section id = "progressShell">
            <section id="progressBar">
                <article>Raised: $<span id="raised">0</span></article><article id = "percent">(0%)</article>
            </section>
        </section>
        Goal: $<span id="goal">0</span>
        <br>
        <form action = "php/donate.php" method = "POST">
            <p> Donate: </p>
            <input type = "text" name = "donate">
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
