<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
<div class="section no-pad-bot light-blue lighten-2 z-depth-1" id="index-banner">
    <div class="container">
        <img class="responsive-img circle z-depth-2" src="img/avatar.jpg" alt="peter reid" id="avatarImage">
      <h1 class="header center white-text">Hello world, my name is Peter Reid</h1>
      <div class="row center">
        <h5 class="header col s12 light blue-grey-text text-darken-4">I am a programmer focussing on Web and Mobile development, and this is my site. Feel free to have a look around!</h5>
      </div>
      <div class="row center">
        <a href="about.php" id="download-button" class="btn-large waves-effect waves-dark blue-grey lighten-5  light-blue-text text-darken-4 z-depth-2">Find out About Me</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">

            <h2 class="center light-blue-text"><i class="mdi-action-settings-ethernet light-blue-text text-darken-2"></i></h2>
            <h5 class="center">Programmer</h5>

<p class="light grey-text text-darken-4 quality-paragraph">I have experience in a variety of languages including: Java, C#, JavaScript, Visual Basic and Bash. I have used a number of different frameworks including ASP.NET with C#.
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="mdi-action-extension light-blue-text text-darken-2"></i></h2>
            <h5 class="center">Problem Solver</h5>

              <p class="light grey-text text-darken-4 quality-paragraph">I would describe myself as a 'logical problem solver'; I set out to solve real-world problems using software. <br/>I always aim to solve problems to the best of my ability.
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="mdi-action-settings light-blue-text text-darken-2"></i></h2>
            <h5 class="center">Technically Experienced</h5>

            <p class="light grey-text text-darken-4 quality-paragraph">I am not just experienced in programming; throuhgout my time in computing I have studied various other roles such as Systems Administration.
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>


<?php
  //Assign all Page Specific variables
  $content = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Home | Peter Reid";
  $headerContent ="<link href='css/index.css' type='text/css' rel='stylesheet' media='screen,projection'/> ";
  //Apply the template
  include("master.php");
?>
