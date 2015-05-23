function setSelectedPage(){

    var currentPage = location.pathname;
    switch (currentPage){
        case "/index.php":
            document.getElementById("homeLink").setAttribute("class","active");
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/about.php":
            document.getElementById("aboutLink").setAttribute("class","active");
            document.getElementById("aboutLinkMob").setAttribute("class","active");
            break;
    }

}
