<?php include('php/nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create | Pls Fund Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <section class="main">
        <h1>Create a new poll</h1>
        <br>
        <p>TODO:</p>
        <ul>
            <li>Make sure all fields have placeholder text as hints</li>
        </ul>
        <form action = "php/create.php" method = "post">
            <table>
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="image">Image: </label></td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td><label for="desc">Description: </label></td>
                    <td><textarea rows="4" name="desc"></textarea></td>
                </tr>
                <tr>
                    <td><label for="goal">Goal: </label></td>
                    <td><input type="text" name="goal"></td>
                </tr>
                <tr>
                    <td><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>
