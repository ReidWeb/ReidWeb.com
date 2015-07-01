function setSelectedPage(){

    var currentPage = location.pathname;
    switch (currentPage){
        case "/":
            document.getElementById("homeLink").setAttribute("class","active");
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/index.php":
            document.getElementById("homeLink").setAttribute("class","active");
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/contact/":
            document.getElementById("contactLink").setAttribute("class","active");
            document.getElementById("contactLinkMob").setAttribute("class","active");
            break;
    }

}
