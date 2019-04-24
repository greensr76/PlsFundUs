<?php include('php/nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Pls Fund Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="javascript/showFunds.js"></script>



</head>
<body>
  <section class="main">
    <h1>Fundraiser Feed</h1>
    <br>
    <p>TODO:</p>
    <ul>
        <li> Resize table images to all be same height (Should be under the same class) </li>
        <li> Have one of the columns be a link to fund page (Maybe save showign the description for fund page)</li>
        <li> Fund page will have giant progress bar and ability to Donate to fund <li>
        <li>fund.html will grab information from the previous page and display that poll's info (Taylor) </li>
        <li>Save users image file into our images folder </li>

    </ul>

    <section id = "fundContainer">
      <table id ="fundTable">
        <tr>
          <th> </th>
          <th> Name </th>
          <th> Description </th>
          <th> Raised </th>
          <th> Goal </th>
        </tr>
      </table>
    </section>
    <section id="footer">
      <hr>
      <p>We need to add some text or just a 'hr' below the table for formatting to work</p>
    </section>
  </section>
</body>
</html>
