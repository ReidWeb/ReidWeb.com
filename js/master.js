function setSelectedPage(){

    var currentPage = location.pathname;
    switch (currentPage){
        case "/":
        case "/index.php":
            document.getElementById("homeLink").setAttribute("class","active");
            break;
        case "/contact/":
            document.getElementById("contactLink").setAttribute("class","active");
            break;
    }

}
function setSelectedPageMobile(){

    var currentPage = location.pathname;
    switch (currentPage){
        case "/":
        case "/index.php":
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/contact/":
            document.getElementById("contactLinkMob").setAttribute("class","active");
            break;
    }

}
// Console easter egg
function consoleEasterEgg () {
      console.log("Hi, you seem to be looking for the source code for this website. You won't find much in here.");
      console.log("You can find the full source code for this site at https://github.com/ReidWeb/ReidWeb.com");
}
