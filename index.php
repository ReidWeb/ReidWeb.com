<!DOCTYPE html>
<html lang="en">
<?php
$pagetitle = "Home | Peter Reid";
$headerContent ="";
include_once("master/head.php");
?>


    <div class="section no-pad-bot light-blue lighten-2 z-depth-0" id="index-banner">
        <div class="navbar-fixed" id="fixed-bar">
            <nav style="background: rgba(255, 255, 255, 0.0);" role="navigation" id="desktop-nav-about">
                <?php include_once("master/navContent.php"); ?>
            </nav>
        </div>
        <?php include_once("master/navContentMobile.php"); ?>

            <!-- End Nav -->

            <div class="container">
                <img class="responsive-img circle z-depth-2" src="/img/avatar.jpg" alt="peter reid" id="bannerAvatarImage" />
                <h1 id="header-title" class="header center white-text">Hello world, my name is Peter Reid</h1>
                <div class="row center">
                    <h5 class="header col s12 light blue-grey-text text-darken-4" id="banner-text">I am a programmer focussing on Web and Mobile development, and this is my site. Feel free to have a look around!</h5>
                </div>
                <div class="row center" id="banner-button" id="scroll-down-button-div">
                    <a id="download-button" class="smoothScroll" href="#download-button"><i class="small mdi-hardware-keyboard-arrow-down"></i> Scroll Down <i class="small mdi-hardware-keyboard-arrow-down"></i></a>
                </div>
                <br/>
                <br/>


            </div>
    </div>

    <div class="section white" id="who-am-i-container">
        <div class="row container">

            <div class="col s12 m4 l3">
                <img class="responsive-img circle z-depth-2" src="/img/avatar.jpg" alt="peter reid" id="who-am-i-image" />

            </div>
            <div class="col s12 m8 l9">
                <!-- Note that "m8 l9" was added -->
                <h1 class="light grey-text text-darken-4 header" id="who-am-i-title">Who am I?</h1>
                <p class="light grey-text text-darken-4 paragraph">
                    Hi, my name is Peter Reid and I am a young programmer from just outside Belfast, Northern Ireland.
                    <br/>
                    <br/>I have a passion for all things computing related; with a particular focus on computer programming. I have programming experience in a variety of different languages - you can find out more about my programming experience below.
                    <br/>
                    <br/>My particular focus at present in software development is on the 'Web' and 'Mobile'; with the intention of improving my skills in these areas by developing applications/sites.
                    <br/>
                    <br/> I am currently studying a Foundation Degree in Software Engineering at Belfast Metropolitan College in conjunction with the University of Ulster. I hope to progress to study Software Engineering at university beginning 2016.

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
                <img class="responsive-img circle z-depth-2" src="/img/programmingSummaryPic.jpg" alt="Programming image" id="programming-image" />
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
                <img class="responsive-img circle z-depth-2" src="/img/about/webSummaryPic.png" alt="Web Image" id="web-summary-image" />
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
                <img class="responsive-img circle z-depth-2" src="/img/about/techSummaryPic.png" alt="Technical image" id="tech-image" />
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
                <img class="responsive-img circle z-depth-2" src="/img/about/educationSummaryPic.png" alt="Web Image" id="web-summary-image" />
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

    <?php include_once("indexModals.php"); ?>
        <?php $footerContent ="<script src='/js/smoothscroll.js'></script><script src='/js/index.js'></script><link href='/css/index.css' type='text/css' rel='stylesheet' media='screen,projection'/>";
include_once("master/footer.php"); ?>
