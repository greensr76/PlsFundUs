window.onload = function () {
    generateNav();
}

var generateNav = function () {
    var container = document.createElement("section");
    container.setAttribute("class", "nav");

    var navLeft = document.createElement("section");
    var brand = document.createElement("a");
    brand.setAttribute("href", "index.html");
    brand.appendChild(document.createTextNode("Brand image here"));
    navLeft.appendChild(brand);

    var navRight = document.createElement("section");
    var register = document.createElement("a");
    register.setAttribute("href", "#");
    navRight.setAttribute("class", "nav-right");
    register.appendChild(document.createTextNode("Register"));
    navRight.appendChild(register);

    container.appendChild(navLeft);
    container.appendChild(navRight);
    
    document.body.insertBefore(container, document.body.firstChild);
}