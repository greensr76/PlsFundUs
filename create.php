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
        <section>
            <form action = "php/insertFund.php" method = "post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="name">*Name: </label></td>
                        <td><input type="text" name="name" required></td>
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
                        <td><label for="goal">*Goal: </label></td>
                        <td><input type="text" name="goal" required></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Submit</button></td>
                    </tr>
                </table>
            </form>
        </section>
        <section id="footer">
        <hr>
        <p>PlsFundMe was developed by Taylor Duvall and Stephen Green</p>
        </section>
    </section>
</body>
</html>
