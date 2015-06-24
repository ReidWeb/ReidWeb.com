<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>About Me | Peter Reid</title>

        <!-- CSS  -->
        <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!--Social Icon Font -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='../css/about.css' type='text/css' rel='stylesheet' media='screen,projection'/>

        <!-- JS -->
        <script src="/js/master.js"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
        <script src='../js/smoothscroll.js'></script>
        <script src='../js/about.js'></script>


    </head>

    <div class="section no-pad-bot light-blue lighten-2 z-depth-0" id="index-banner">
        <div class="navbar-fixed" id="fixed-bar">
            <nav style="background: rgba(255, 255, 255, 0.0);" role="navigation" id="desktop-nav-about">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="/" class="brand-logo blue-grey-text text-darken-4 thin">Peter Reid</a>
                    <ul class="right hide-on-med-and-down">
                        <li id="homeLink"><a href="/" class="blue-grey-text text-darken-4">Home</a></li>
                        <li id="projectsLink"><a href="#" class="blue-grey-text text-darken-4">Projects</a></li>
                        <li id="blogLink"><a href="#" class="blue-grey-text text-darken-4">Blog</a></li>
                        <li id="aboutLink"><a href="/about" class="blue-grey-text text-darken-4">About Me</a></li>
                        <li id="contactLink"><a href="#" class="blue-grey-text text-darken-4">Contact</a></li>
                    </ul>


                    <ul id="nav-mobile" class="side-nav white z-depth-5">
                        <div id="nav-mobile-header"><img class="responsive-img circle z-depth-1" src="/img/avatar.jpg" alt="peter reid"/><a id="logo-container" href="/" class="brand-logo white-text bold">peter reid</a></div>
                        <li id="homeLinkMob" class="blue-grey-text text-darken-4"><a href="/"><i class="tiny mdi-action-home left blue-grey-text text-darken-4"></i>Home</a></li>
                        <li id="projectsLinkMob" class="blue-grey-text text-darken-4"><a href="#"><i class="tiny mdi-av-web left 1  blue-grey-text text-darken-4"></i>Projects</a></li>
                        <li id="blogLinkMob" class="blue-grey-text text-darken-4"><a href="#"><i class="tiny mdi-action-speaker-notes left blue-grey-text text-darken-4"></i>Blog</a></li>
                        <li id="aboutLinkMob" class="blue-grey-text text-darken-4"><a href="/about"><i class="tiny mdi-social-person left blue-grey-text text-darken-4"></i>About Me</a></li>
                        <li id="contactLinkMob" class="blue-grey-text text-darken-4"><a href="#"><i class="tiny mdi-communication-email left blue-grey-text text-darken-4"></i>Contact</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse blue-grey-text text-darken-4"><i class="mdi-navigation-menu"></i></a>
                </div>
            </nav>
        </div>

        <div class="container">
            <img class="responsive-img circle z-depth-2" src="../img/avatar.jpg" alt="peter reid" id="bannerAvatarImage"/>
            <h1 class="header center white-text">Hello world, my name is Peter Reid</h1>
            <div class="row center">
                <h5 class="header col s12 light blue-grey-text text-darken-4" id="banner-text">I am a programmer focussing on Web and Mobile development, and this is my site. Feel free to have a look around!</h5>
            </div>
            <div class="row center" id="banner-button" id="scroll-down-button-div">
                <a  id="download-button" class="smoothScroll" href="#download-button"><i class="small mdi-hardware-keyboard-arrow-down"></i> Scroll Down <i class="small mdi-hardware-keyboard-arrow-down"></i></a>
            </div>
            <br/>
            <br/>


        </div>
    </div>

    <div class="section white" id="who-am-i-container">
        <div class="row container">

            <div class="col s12 m4 l3">
                <img class="responsive-img circle z-depth-2" src="/img/avatar.jpg" alt="peter reid" id="who-am-i-image"/>

            </div>
            <div class="col s12 m8 l9">
                <!-- Note that "m8 l9" was added -->
                <h1 class="light grey-text text-darken-4 header" id="who-am-i-title">Who am I?</h1>
                <p class="light grey-text text-darken-4 paragraph">
                    Hi, my name is Peter Reid and I am a young programmer from just outside Belfast, Northern Ireland.<br/><br/>I have a passion for all things computing related; with a particular focus on computer programming. I have programming experience in a variety of different languages - you can find out more about my programming experience below.<br/><br/>My particular focus at present in software development is on the 'Web' and 'Mobile'; with the intention of improving my skills in these areas by developing applications/sites.<br/><br/>
                    I am currently studying a Foundation Degree in Software Engineering at Belfast Metropolitan College in conjunction with the University of Ulster. I hope to progress to study Software Engineering at university beginning 2016.

                </p>
                <a class="btn-floating btn-large waves-effect waves-light  light-blue lighten-1 smoothScroll z-depth-2" id="programming-jumper" href="#programming-section">
                    <i class="mdi-hardware-keyboard-arrow-down white-text"></i>
                </a>
            </div>

        </div>

    </div>

    <div class="parallax-container" style="height:250px;">
        <div class="parallax"><img src="/img/parallax-belfast-titanic.jpg"></div>
    </div>

    <div class="section white" id="programming-section">
        <div class="row container">
            <div class="col s12 m8 l9">
                <h2 class="header thin">Programming</h2>
                <p class="light grey-text text-darken-4 paragraph">
                    I have experience in a variety of programming languages:
                </p>
                <div id="programming-list">
                    <ul>
                        <li><a class="modal-trigger language-item" href="#modalJava">Java</a>
                            <p class="language-item-sub">Desktop application development <a class="modal-trigger language-item-more" href="#modalJava">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalCsharp">C#</a>
                            <p class="language-item-sub">Server-side Programming with ASP.NET <a class="modal-trigger language-item-more" href="#modalCsharp">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalJS">JavaScript</a>
                            <p class="language-item-sub">Client-side scripting<a class="modal-trigger language-item-more" href="#modalJS">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalBash">Bash</a>
                            <p class="language-item-sub">Task automation in Linux <a class="modal-trigger language-item-more" href="#modalBash">MORE</a></p>
                        </li>
                    </ul>
                </div>
                <p class="light grey-text text-darken-4 paragraph" style="clear:left;">In the immediate future I am looking to expand my knowledge of programming languages to include both PHP and Ruby</p>

            </div>


            <div class="col s12 m4 l3" style="margin-top:7%;">
                <img class="responsive-img circle z-depth-2" src="/img/programmingSummaryPic.jpg" alt="Programming image" id="programming-image"/>
            </div>

        </div>

    </div>
    <div style="height:1px;">
        <a class="btn-floating btn-large waves-effect waves-light  light-blue lighten-1 smoothScroll z-depth-2" id="web-jumper" href="#design-container">
            <i class="mdi-hardware-keyboard-arrow-down white-text"></i>
        </a>

    </div>

    <div class="parallax-container" style="height:250px;">
        <div class="parallax"><img src="/img/parallax-shard.jpg"></div>
    </div>

    <div class="section white" id="design-container">
        <div class="row container">
            <div class="col s12 m4 l3">
                <img class="responsive-img circle z-depth-2" src="/img/about/webSummaryPic.png" alt="Web Image" id="web-summary-image"/>
            </div>
            <div class="col s12 m8 l9">
                <h2 class="header thin">Design</h2>
                <p class="light grey-text text-darken-4 paragraph">
                    While my primary focus is not on design, I do have experience in both designing applications and implementing the design of applications.
                </p>
                <div id="design-list">
                    <ul>
                        <li><a class="modal-trigger language-item" href="#modalHTML">HTML & CSS</a>
                            <p class="language-item-sub">Web design, responsive web design and server-side code integration<a class="modal-trigger language-item-more" href="#modalHTML">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalGraphicDesign">Graphic Design</a>
                            <p class="language-item-sub">Graphic design for digital and physical media.<a class="modal-trigger language-item-more" href="#modalGraphicDesign">MORE</a></p>
                        </li>
                    </ul>
                    <div style="height:1px;">
                        <a class="btn-floating btn-large waves-effect waves-light  light-blue lighten-1 smoothScroll z-depth-2" id="tech-jumper" href="#tech-container">
                            <i class="mdi-hardware-keyboard-arrow-down white-text"></i>
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="parallax-container" style="height:250px;">
        <div class="parallax"><img src="/img/parallax-singapore.jpg"></div>
    </div>

    <div class="section white" id="tech-container">
        <div class="row container">
            <div class="col s12 m8 l9">
                <h2 class="header thin">Technical Skills</h2>
                <p class="light grey-text text-darken-4 paragraph">
                    I have accumulated a number of technical skills that can be utilised in my programming. These are:
                </p>
                <div id="tech-list">
                    <ul>
                        <li><a class="modal-trigger language-item" href="#modalVC">Version Control</a>
                            <p class="language-item-sub">Git & Subversion<a class="modal-trigger language-item-more" href="#modalVC">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalIDE">Development Tools</a>
                            <p class="language-item-sub">IDEs and Continuous Integration<a class="modal-trigger language-item-more" href="#modalIDE">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalDB">Database Design & Development</a>
                            <p class="language-item-sub">Database Design & SQL Database Development<a class="modal-trigger language-item-more" href="#modalDB">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalLinux">Linux</a>
                            <p class="language-item-sub">Linux desktop & Linux system administration <a class="modal-trigger language-item-more" href="#modalLinux">MORE</a></p>
                        </li>
                        <li><a class="modal-trigger language-item" href="#modalMethods">Development Methodologies</a>
                            <p class="language-item-sub">Scrum & SSADM <a class="modal-trigger language-item-more" href="#modalMethods">MORE</a></p>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col s12 m4 l3" style="margin-top:8%;">
                <img class="responsive-img circle z-depth-2" src="/img/about/techSummaryPic.png" alt="Technical image" id="tech-image"/>
            </div>

        </div>
        <div style="height:1px;">
            <a class="btn-floating btn-large waves-effect waves-light  light-blue lighten-1 smoothScroll z-depth-2" id="academic-jumper" href="#academic-container">
                <i class="mdi-hardware-keyboard-arrow-down white-text"></i>
            </a>

        </div>

    </div>


    <div class="parallax-container" style="height:250px;">
        <div class="parallax"><img src="/img/parallax-san-fran-city.jpg"></div>
    </div>

    <div class="section white" id="academic-container">
        <div class="row container">
            <div class="col s12 m4 l3">
                <img class="responsive-img circle z-depth-2" src="/img/about/educationSummaryPic.png" alt="Web Image" id="web-summary-image"/>
            </div>
            <div class="col s12 m8 l9">
                <h2 class="header thin">Education</h2>
                <p class="light grey-text text-darken-4 paragraph">
                <div id="academic-list">
                    <ul>
                        <li><a class="modal-trigger language-item" href="#modalFDSE">Foundation Degree in Software Engineering</a>
                            <p class="education-institution">University of Ulster</p>
                            <p class="education-year">2014-Present<a class="modal-trigger language-item-more" href="#modalFDSE">MORE</a></p>
                        </li>
                    </ul>
                </div>
                </p>

        </div>

    </div>

    </div>

<div class="parallax-container" style="height:250px;">
    <div class="section" id="contact-container">
        <div class="row container">
        </div>
    </div>
    <div class="parallax"><img src="/img/parallax-shard2.jpg"></div>
</div>

<!-- modals -->
<div id="modalJS" class="modal">
    <div class="popout-frame-image-container" id="js-image-container">
        <a class="btn-flat waves-effect waves-light popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back white-text"></i>
        </a>
    </div>
    <div class="modal-content">
        <h4>JavaScript</h4>
        <p>I have a large amount of experience in the use of JavaScript for a variety of purposes, including:</p>
        <h5>Web form validation</h5>
        <p>I have used JavaScript on a number of occasions to validate input for web forms; utilizing RegEx to validate input such as email addresses.</p>
        <h5>Mathematical Calculations</h5>
        <p>On a number of occasions I have used JavaScript to perform rather complex mathematical operations on sets of numbers that have been input by a user.</p>
        <h5>Application Logic</h5>
        <p>I have utlilized JavaScript to perform application logic on a number of occasions, using JS to display and hide HTML elements based upon logic implemented in JavaScript.</p>
        <h5>JQuery</h5>
        <p>I have a little experience in JQuery which I gained during the development of this site. I am looking to expand my knowledge of JQuery in the future, I also aim to learn other JavaScript frameworks to include NodeJS and AngularJS.</p>
    </div>
</div>

<div id="modalJava" class="modal">
    <div class="popout-frame-image-container" id="java-image-container">
        <a class="btn-flat waves-effect waves-light popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back white-text"></i>
        </a>
    </div>
    <div class="modal-content">

        <h4>Java</h4>
        <p>I have a large amount of experience in the use of Java for the development of desktop applications.</p>
        <p>A large amount of this experience was aqquired during my education, however parts of my knowledge were acquired through my own research.</p>
        <p>In future, I am looking to further develop my Java skills and knowledge by developing Android applications.</p>
        <h5>Object Oriented Programming with Java</h5>
        <p>My first experiences of object oriented programming originate from my use of Java. I have utilized OOP to develop a number of applications in Java both on a personal basis and on an academic basis.</p>
        <h5>GUI based application development using Java Swing</h5>
        <p>I have developed a number of applications using Java Swing to build the GUIs for these applications on both a personal and academic basis. In future I hope to utilise JavaFX in applications to expand my knowledge of GUI development in Java.</p>
    </div>
</div>

<div id="modalCsharp" class="modal">
    <div class="popout-frame-image-container" id="c-sharp-image-container">
        <a class="btn-flat waves-effect popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back black-text"></i>
        </a>
    </div>
    <div class="modal-content">
        <h4>C#</h4>
        <p>My experience of C# stems from my use of C# as a part of ASP.NET websites during my education. In future I hope to expand my knowledge of C# to the use of C# for both 'traditional' Windows desktop applications and Windows 10 'universal' applications.</p>
        <h5>Server side scripting</h5>
        <p>I have utilised C# along with ASP.NET to a 'eCommerce' site with a basic content management system. I utilised C# to load content into the page dynamically based upon an external data source. I also utilised C# to develop a 'cart' system for the site.</p>
    </div>
</div>

<div id="modalBash" class="modal">
    <div class="popout-frame-image-container" id="bash-image-container">
        <a class="btn-flat waves-effect waves-light popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back white-text"></i>
        </a>
    </div>
    <div class="modal-content">
        <h4>Bash</h4>
        <p>I have utilised bash to 'automate' a number of systems on both my Linux server and laptop. While Bash may not neccessarily be viewed as a 'programming' language, the automated systems that it is enabled me to develop have been extremely useful.</p>
        <h5>Server MOTD Script</h5>
        <p>One of my earliest uses of Bash was to develop a dynamically generated 'Message of the Day' script for my Linux server. I wanted a means by which I could easily view the 'health' of the system when logging in over SSH; as such I developed a script that displayed information such as the disk and CPU usage of the system when logging in.</p>
        <p>The script is open sourced under the MIT license and can be found on <a href="https://github.com/ReidWeb/linuxmotd" target="_blank">GitHub</a>.</p>
        <h5>Build Process Automation</h5>
        <p>I have utilized bash scripting to automate processes that are completed when building a project using my Jenkins build server. I have written a number of different scripts to automate tasks such as: generating Javadocs for each branch of a git repository and copy them to a web-accessable directory and automatically 'mirroring' a git repository to another remote server when a build is triggered.</p>
    </div>
</div>

<div id="modalHTML" class="modal">
    <div class="popout-frame-image-container" id="html-image-container">
        <a class="btn-flat waves-effect waves-light popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back white-text"></i>
        </a>
    </div>

    <div class="modal-content">
        <h4>HTML & CSS</h4>
        <p>I have a large amount of experience in CSS, and both HTML5 and XHTML which I have accumulated from a number of projects in my academic and non-academic work. The majority of my experience is in developing websites, however I do have experience in developing Windows 8 applications with web technologies.</p>
        <h5>Front End Frameworks</h5>
        <p>I have utilised a number of different front-end frameworks to develop a number of sites. I have recently been using <a href="http://materializecss.com/" target="_blank">Materialize</a> to develop websites that are designed with Google's <a href="https://www.google.com/design/spec/material-design/introduction.html" target="_blank">'Material Design'</a> design languages in mind. I have also used <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> versions 2 and 3 in the past.</p>
        <h5>Responsive Design</h5>
        <p>I am experienced in designing websites that provide a excellent user experience on any device. I have experience in this both with the use of a design framework and without one.</p>
        <h5>Dynamic Websites</h5>
        <p>I have utilised ASP.NET (C#) to develop dynamic websites where the content changes dependent on the user. I am aiming to expand my knowledge of web development to include PHP and NodeJS in the future.</p>
        <h5>Templating</h5>
        <p>I have experience in utilising 'templates' to simplify the development of sites, I have experience in doing this in both ASP.NET(C#) and PHP.</p>
    </div>
</div>

<div id="modalGraphicDesign" class="modal">
    <div class="popout-frame-image-container" id="design-image-container">
        <a class="btn-flat waves-effect waves-dark popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back black-text"></i>
        </a>
    </div>
    <div class="modal-content">
        <h4>Graphic Design</h4>
        <p>I have had approximately six years of experience in amateur graphic design using Adobe Photoshop. I also have experience in the use of GIMP.</p>
        <h5>Graphic Design for Digital Media</h5>
        <p>I have created graphics for digital media on numerous occasions; for use in websites and desktop applications. I have experience in creating 'pleasing' graphics that form part of an intuitive user interface.</p>
        <h5>Graphic Design for Physical Media</h5>
        <p>While I have less experience in designing for physical media than I do for digital media; I do have experience in designing for physical media. I am aware of the various different requirements for designing for physical media as opposed to for digital media.</p>
    </div>
</div>

<div id="modalVC" class="modal">
    <div class="popout-frame-image-container" id="vc-image-container">
        <a class="btn-flat waves-effect waves-light popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back white-text"></i>
        </a>
    </div>
    <div class="modal-content">
        <h4>Version Control</h4>
        <p>I have been using version control with all my work since the 2013, I'm particularly experienced in Git - however, I do have experience in Subversion also.</p>
        <h5>Git Version Control</h5>
        <p>I have been using Git version control ever since my work placement in 2013, I am familiar with the strengths and weaknesses of Git and other Distributed Version Control Systems. I have experience both as a user of Git and as an administrator of a Git version control server. I store all of my academic work in Git repositories, and all of my personal projects are also stored in git.</p>
        <p>I have experience in a variety of Git workflows including: <a href="https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow" target="_blank">gitflow workflow</a>,<a href="https://www.atlassian.com/git/tutorials/comparing-workflows/feature-branch-workflow" target="_blank"> feature branch workflow</a> and <a href="https://www.atlassian.com/git/tutorials/comparing-workflows/centralized-workflow" target="_blank">centralized workflow.</a></p>
        <p>During my Foundation Degree I assisted teaching staff in the use and documentation of Git for tracking group projects - this allowed teaching staff to track how much each student contributed towards the group project and also empowered easier collaboration between team members.</p>
        <h5>Subversion</h5>
        <p>Although I am mainly experienced in Git, I do have experience in Centralised Version Systems; in particular Subversion. I have done some work in Subversion so that I am familiar with the core concepts in relation to Subversion and other centralised version control systems.</p>
    </div>
</div>

<div id="modalFDSE" class="modal">
    <div class="popout-frame-image-container" id="fdse-image-container">
        <a class="btn-flat waves-effect waves-light popout-back-btn modal-close">
            <i class="mdi-navigation-arrow-back white-text"></i>
        </a>
    </div>
    <div class="modal-content">
        <h4>Foundation Degree in Software Engineering</h4>
        <h5 class="edu-modal-inst">University of Ulster & Belfast Metroplitan College</h5>
        <h5 class="edu-modal-year">2014-Present</h5>
        <p>Between September 2014 and June 2016, I am studying on a Foundation Degree in Software Engineering at Belfast Metropolitan College, with the University of Ulster Jordanstown setting the curriculum for the course and acting as the awarding body.</p>
        <h5>Academic Performance</h5>
        <p>My academic performance at the end of year one placed me as the highest scoring student in the academic year; with an average modular mark of 85%, and average assessment mark of 90%.</p>
        <h5>Future Ambitions</h5>
        <p>In future I hope to progress onto further study at university, at present I am progressing towards second year entry to a BEng in Software Engineering.</p>
        <h5>Course Content</h5>
        <p>The course comprised of modules relating to the following: </p>
        <ul>
            <li>• <b>Programming</b> - Object oriented programming in Java 7, utilising SQL databases and Java Swing GUIs also.</li>
            <li>• <b>Web Programming</b> - Web development in XHTML and CSS with ASP.NET and C#. Projects included development of a ecommerce site with integrated CMS.</li>
            <li>• <b>Database Development</b> - Design and devlopment of database systems using both Microsoft SQL Server and Microsoft Access.</li>
            <li>• <b>Systems Development Methdodologies</b> - A variety of development methodologies were taught as part of a module, other assignments utilised Agile Scrum, while some utilised SSADM.</li>
            <li>• <b>Computer Hardware</b> - Covered a variety of topics including: various different computer components and the skills and knowledge required to build a computer. Content also covered some networking.</li>
            <li>• <b>Operating Systems</b> - Content covered included binary, hexadecimal and ocatal numbering systems as well as various mathematical topics in relation to binary. Assembly programming also covered.</li>
        </ul>
    </div>
</div>

<?php include_once("../master/footer.php"); ?>
