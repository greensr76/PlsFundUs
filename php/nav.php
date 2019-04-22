<?php include('session.php');
$nav = '<script>
window.onload = function () {
    generateNav();
}

var generateNav = function () {
    var container = document.createElement("section");
    container.setAttribute("class", "nav");

    var navLeft = document.createElement("section");
    var navRight = document.createElement("section");
    navRight.setAttribute("class", "nav-right");

    var brand = document.createElement("a");
    brand.setAttribute("href", "index.php");
    brand.appendChild(document.createTextNode("PlsFundMe"));
    navLeft.appendChild(brand);
    var create = document.createElement("a");
    create.setAttribute("href", "create.php");
    create.appendChild(document.createTextNode("Create"));
    navLeft.appendChild(create);

    var register = document.createElement("a");
    ';
if ($session_value) {
    $nav.= '
    register.appendChild(document.createTextNode("Logout"));
    register.setAttribute("href", "php/logout.php");
    ';
} else {
    $nav.= '
    register.appendChild(document.createTextNode("Register"));
    register.setAttribute("href", "login.php");
    ';
}

    $nav .= '
    navRight.appendChild(register);

    container.appendChild(navLeft);
    container.appendChild(navRight);
    
    document.body.insertBefore(container, document.body.firstChild);
}
</script>';

echo $nav;

?>