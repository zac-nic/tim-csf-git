window.onload = function () {
    document.getElementById("menuHamburger").onclick = function () {
        ouvrirMenu()
    };

    function ouvrirMenu() {
        document.getElementById("menuHamburger").style.visibility = "hidden";
        document.getElementById("menuClose").style.visibility = "visible";
        document.getElementById("menuOuvert").style.visibility = "visible";
        document.getElementById("menuOuvert").style.height = "100%";
    }

    document.getElementById("menuClose").onclick = function () {
        fermerMenu()
    };
    function fermerMenu() {
        document.getElementById("menuHamburger").style.visibility = "visible";
        document.getElementById("menuClose").style.visibility = "hidden";
        document.getElementById("menuOuvert").style.visibility = "hidden";
        document.getElementById("menuOuvert").style.height = "0";

    }

};