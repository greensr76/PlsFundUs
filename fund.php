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
        <table class="fundInfo">
            <tr>
                <td rowspan=2 class="td_image"><img id="fundImg" class="tableImg" src="images/test.png"></td>
                <td><h1 id="fundName">This is a poll name</h1></td>
            </tr>
            <tr>
                <td><h5 id="desc">This is a description</h5></td>
            </tr>
        </table>      
        <br>
        <section id = "progressShell">
            <section id = "progressBar">
                <span> Raised: $<span id="raised">0</span></span>
            </section>
            <span> Goal: $<span id="goal">0</span> </span>
        </section>
        <br>
        <form>
            <p> Donate: </p>
            <input type = "text" name = "donate">
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
