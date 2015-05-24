<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title><?php echo $pagetitle; ?></title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- JS -->
  <script src="js/master.js"></script>

  <?php echo $headerContent; ?>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="white lighten-1" role="navigation">
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
                    <div id="nav-mobile-header"><img class="responsive-img circle z-depth-1" src="img/avatar.jpg" alt="peter reid"/><a id="logo-container" href="/" class="brand-logo white-text bold">peter reid</a></div>
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

    <script>
        setSelectedPage();
    </script>

    <?php echo $content; ?>

  <footer class="page-footer grey lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="grey-text text-darken-3">About Me</h5>
          <p class="grey-text text-darken-3">I am a Software Engineering student from Belfast, Northern Ireland. I have an immense passion for software development. This website is intended as a 'portfolio' of my work. Feel free to have a look around and contact me if you see fit.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="grey-text text-darken-3">Settings</h5>
          <ul>
            <li><a class="grey-text text-darken-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="grey-text text-darken-3">Connect</h5>
          <ul>
            <li><a class="grey-text text-darken-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-darken-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-3">
      <div class="container">
      © 2015 Peter Reid | Built with <a class=" white-text" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
