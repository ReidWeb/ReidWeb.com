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
