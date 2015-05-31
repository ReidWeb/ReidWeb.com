<?php
//Buffer larger content areas like the main page content
ob_start();
?>
<div class="parallax-container">
    <div class="parallax"><img src="/img/parallax-san-fran-city.jpg"></div>
    <div class="container" id="header-container">
        <h1 class="header left white-text" id="title">About Me</h1>

    </div>
</div>

<div class="section white z-depth-2" id="who-am-i-container">
    <div class="row container">
        <a class="btn-floating btn-large waves-effect waves-light  light-blue lighten-1 smoothScroll z-depth-2" id="who-am-i-jumper" href="#title">
            <i class="mdi-hardware-keyboard-arrow-down white-text"></i>
        </a>

        <div class="col s12 m4 l3">
            <img class="responsive-img circle z-depth-2" src="/img/avatar.jpg" alt="peter reid" id="who-am-i-image"/>

        </div>
        <div class="col s12 m8 l9">
            <!-- Note that "m8 l9" was added -->
            <h1 class="light grey-text text-darken-4 header">Who am I?</h1>
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
                I have experience in a variety of programming languages: (click each language to learn more)
            </p>

            <ul>
                <li><a class="modal-trigger grey-text text-darken-1 language-item" href="#modalJava">• Java</a></li>
                <li><a class="modal-trigger grey-text text-darken-1 language-item" href="#modalCsharp">• C#</a></li>
                <li><a class="modal-trigger grey-text text-darken-1 language-item" href="#modalJS">• JavaScript</a></li>
                <li><a class="modal-trigger grey-text text-darken-1 language-item" href="#modalBash">• Bash</a></li>
            </ul>
            <p>In the immediate future I am looking to expand my knowledge of programming languages to include both PHP and Ruby</p>

            <div id="modalJS" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>JavaScript</h4>
                    <p>I have a large amount of experience in the use of JavaScript for a variety of purposes, including:</p>
                    <h5>Web form validation</h5>
                    <p>I have used JavaScript on a number of occasions to validate input for web forms; utilizing RegEx to validate input such as email addresses.</p>
                    <h5>Mathematical Calculations</h5>
                    <p>On a number of occasions I have used JavaScript to perform rather complex mathematical operations on sets of numbers that have been input by a user.</p>
                    <h5>Application Logic</h5>
                    <p>I have utlilized JavaScript to perform application logic on a number of occasions, using JS to display and hide HTML elements based upon logic implemented in JavaScript.</p>
                    <p>I have also used a small amount of JQuery to develop this site, a skill which I am looking to expand upon in the future. I am also looking to expand my knowledge to include technologies such as NodeJS and AngularJS.</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>

            <div id="modalJava" class="modal">
                <div class="parallax-container popout-frame-image-container">
                    <a class="btn-flat waves-effect waves-light popout-back-btn">
                        <i class="mdi-navigation-arrow-back white-text"></i>
                    </a>
                    <div class="parallax popout-frame-image"><img src="/img/about/javaPic.png"></div>
                </div>
                <div class="modal-content">

                    <h4>Java</h4>
                    <p>I have a large amount of experience in the use of Java for the development of desktop applications.</p>
                    <p>A large amount of this experience was aqquired during my education, however parts of my knowledge were aqquired through my own research.</p>
                    <p>In future, I am looking to further develop my Java skills and knowledge by developing Android applications.</p>
                    <h5>Object Oriented Programming with Java</h5>
                    <p>My first experiences of object oriented programming originate from my use of Java. I have utilized OOP to develop a number of applications in Java both on a personal basis and on an academic basis.</p>
                    <h5>GUI based application development using Java Swing</h5>
                    <p>I have developed a number of applications using Java Swing to build the GUIs for these applications on both a personal and academic basis. In future I hope to utilise JavaFX in applications to expand my knowledge of GUI development in Java.</p>
                </div>
            </div>

            <div id="modalCsharp" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>C#</h4>
                    <p>My experience of C# stems from my use of C# as a part of ASP.NET websites during my education. In future I hope to expand my knowledge of C# to the use of C# for both 'traditional' Windows desktop applications and Windows 10 'universal' applications.</p>
                    <h5>Server side scripting</h5>
                    <p>I have utilised C# along with ASP.NET to a 'eCommerce' site with a basic content management system. I utilised C# to load content into the page dynamically based upon an external data source. I also utilised C# to develop a 'cart' system for the site.</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>

            <div id="modalBash" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Bash</h4>
                    <p>I have utilised bash to 'automate' a number of systems on both my Linux server and laptop. While Bash may not neccessarily be viewed as a 'programming' language, the automated systems that it is enabled me to develop have been extremely useful.</p>
                    <h5>Server MOTD Script</h5>
                    <p>One of my earliest uses of Bash was to develop a dynamically generated 'Message of the Day' script for my Linux server. I wanted a means by which I could easily view the 'health' of the system when logging in over SSH; as such I developed a script that displayed information such as the disk and CPU usage of the system when logging in.</p>
                    <p>The script is open sourced under the MIT license and can be found on <a href="https://github.com/ReidWeb/linuxmotd" target="_blank">GitHub</a>.</p>
                    <h5>Build Process Automation</h5>
                    <p>I have utilized bash scripting to automate processes that are completed when building a project using my Jenkins build server. I have written a number of different scripts to automate tasks such as: generating Javadocs for each branch of a git repository and copy them to a web-accessable directory and automatically 'mirroring' a git repository to another remote server when a build is triggered.</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>

        </div>

        <div class="col s12 m4 l3">
            <img class="responsive-img circle z-depth-2" src="/img/programmingSummaryPic.jpg" alt="Programming image" id="programming-image"/>


        </div>
    </div>
</div>

<div class="parallax-container" style="height:250px;">
    <div class="parallax"><img src="/img/parallax-shard.jpg"></div>
</div>

<?php
//Assign all Page Specific variables
$content = ob_get_contents();
ob_end_clean();
$pagetitle = "About Me | Peter Reid";
$headerContent ="<link href='../css/about.css' type='text/css' rel='stylesheet' media='screen,projection'/>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <script src='../js/smoothscroll.js'></script>
  <script src='../js/about.js'></script>
  ";
//Apply the template
include("../master.php");
?>
