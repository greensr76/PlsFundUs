window.onload = function () {
    generateNav();
}

var generateNav = function () {
    var container = document.createElement("div");
    container.setAttribute("class", "navbar");
    var brand = document.createElement("a");
    brand.setAttribute("href", "/index.html");
    brand.appendChild(document.createTextNode("Brand image here"));
    container.appendChild(brand);
    document.getElementById("nav").appendChild(container);
}