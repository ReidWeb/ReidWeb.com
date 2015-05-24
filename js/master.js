function setSelectedPage(){

    var currentPage = location.pathname;
    prompt(currentPage);
    switch (currentPage){
        case "/":
            document.getElementById("homeLink").setAttribute("class","active");
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/index.php":
            document.getElementById("homeLink").setAttribute("class","active");
            document.getElementById("homeLinkMob").setAttribute("class","active");
            break;
        case "/about/":
            document.getElementById("aboutLink").setAttribute("class","active");
            document.getElementById("aboutLinkMob").setAttribute("class","active");
            break;
    }

}
