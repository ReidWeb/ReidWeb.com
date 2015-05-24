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

    <div class="section white" id="who-am-i-container">
    <div class="row container">
            <a class="btn-floating btn-large waves-effect waves-light  light-blue lighten-1 smoothScroll z-depth-2" href="#title">
        <i class="mdi-hardware-keyboard-arrow-down white-text"></i>
      </a>
    <div class="row">

      <div class="col s12 m4 l3">
        <img class="responsive-img circle z-depth-2" src="img/avatar.jpg" alt="peter reid" id="avatarImage"/>
                  </div>

      <div class="col s12 m8 l9">
        <!-- Note that "m8 l9" was added -->
        <h1 class="light grey-text text-darken-4 header">Who am I?</h1>
        <p class="light grey-text text-darken-4 intro-paragraph">
          Hi, my name is Peter Reid and I am a young programmer from just outside Belfast, Northern Ireland.<br/><br/>I have a passion for all things computing related; with a particular focus on computer programming. I have programming experience in a variety of different languages - you can find out more about my programming experience below.<br/><br/>My particular focus at present in software development is on the 'Web' and 'Mobile'; with the intention of improving my skills in these areas by developing applications/sites.<br/><br/>
          I am currently studying a Foundation Degree in Software Engineering at Belfast Metropolitan College in conjunction with the University of Ulster. I hope to progress to study Software Engineering at university beginning 2016.

        </p>
      </div>

    </div>
  </div>
</div>
</div>

    <div class="parallax-container">
        <!-- http://pixabay.com/en/belfast-ireland-museum-titanic-579373/ -->
        <div class="parallax"><img src="/img/parallax-belfast-titanic.jpg"></div>
    </div>

  <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>

<?php
  //Assign all Page Specific variables
  $content = ob_get_contents();
  ob_end_clean();
  $pagetitle = "About Me | Peter Reid";
  $headerContent ="<link href='css/about.css' type='text/css' rel='stylesheet' media='screen,projection'/>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <script src='js/smoothscroll.js'></script>
  <script src='js/about.js'></script>
  ";
  //Apply the template
  include("master.php");
?>
