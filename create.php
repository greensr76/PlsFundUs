<?php include('php/nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create | Pls Fund Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="javascript/functions.js"></script>
</head>
<body>
    <section class="main">
        <h1>Create a new poll</h1>
        <br>
        <p>TODO: Database Schema
        Users Table: ID(Primary) Name Password
        Funds:  Name(Primary) Description Raised Goal  UserID(Foreign Key) Image</p>
        <ul>
            <li>Make sure all fields have placeholder text as hints</li>
        </ul>
        <form action = "php/create.php" method = "post">
            <label for="name">Name: </label>
            <input type="text" name="name">
            <br/>
            <label for="image">Image: </label>
            <input type="file" name="image">
            <br/>
            <label for="desc">Description: </label>
            <input type="textarea" rows="4" name="desc">
            <br/>
            <label for="goal">Goal: </label>
            <input type="text" name="goal">
            <br/>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
