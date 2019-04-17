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
    brand.setAttribute("href", "index.html");
    brand.appendChild(document.createTextNode("PlsFundMe"));
    navLeft.appendChild(brand);
    var create = document.createElement("a");
    create.setAttribute("href", "create.html");
    create.appendChild(document.createTextNode("Create"));
    navLeft.appendChild(create);

    var register = document.createElement("a");
    register.setAttribute("href", "login.html");
    register.appendChild(document.createTextNode("Register"));
    navRight.appendChild(register);

    container.appendChild(navLeft);
    container.appendChild(navRight);
    
    document.body.insertBefore(container, document.body.firstChild);
}