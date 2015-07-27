<footer class="page-footer ">
  <div class="footer-copyright grey darken-3">
    <div class="container">
      © 2015 Peter Reid
      <div style="float:right;height:100%;">
        <a class="social-icon-anchor" href="https://keybase.io/peterreid"><i class="social-icon mdi-communication-vpn-key" style="font-size:20px;"></i></a>
      </div>
      <div style="float:right;height:100%;margin-top:19px;">
        <a class="social-icon-anchor" href="https://twitter.com/reidweb"><i class="social-icon fa fa-twitter fa-lg"></i></a>
      </div>
      <div style="float:right;height:100%;margin-top:18px;">
        <a class="social-icon-anchor" href="https://uk.linkedin.com/in/reidweb"><i class="social-icon fa fa-linkedin fa-lg"></i></a>
      </div>
      <div style="float:right;height:100%;margin-top:18px;">
        <a class="social-icon-anchor" href="https://github.com/ReidWeb"><i class="social-icon fa fa-github fa-lg"></i></a>
      </div>
      <div style="float:right;height:100%;">
        <a class="social-icon-anchor" href="mailto:contact@reidweb.com"><i class="social-icon mdi-communication-email" style="font-size:20px;"></i></a>
      </div>
    </div>
  </div>
</footer>
</body>

<!-- CSS  -->
<link async rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
<!--Social Icon Font -->
<link async rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Master Style -->
<link async href="https://storage.googleapis.com/cdn.reidweb.com/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
<!-- Page specific css-->
<?php echo $footerContentCSS; ?>


  <!--  Scripts-->
  <!-- JS -->
  <script async src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <script  async src="/js/master.js"></script>
  <script async src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script  async src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <?php echo $footerContentJS; ?>

    <!-- Fade out loader upon page load -->
    <script type="text/javascript">
      $(window).load(function() {
        $(".loader").fadeOut("slow");
      });

    </script>

    <script src="/js/init.js"></script>
    <script>setSelectedPageMobile();</script>
    <script>consoleEasterEgg();</script>

    </html>
