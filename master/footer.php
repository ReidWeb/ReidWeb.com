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

<!-- Page specific css-->
<?php echo $footerContentCSS; ?>


  <!--  Scripts-->
  <!-- JS -->
  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <script src="/js/master.js"></script>
  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <?php echo $footerContentJS; ?>

    <!-- Fade out loader upon page load -->
    <script type="text/javascript">
      $(window).load(function() {
        $(".loader").fadeOut("slow");
      });

    </script>

    <script src="/js/init.js"></script>
    <script>
      setSelectedPageMobile();

    </script>
    <script>
      consoleEasterEgg();

    </script>
        <?php
            $base_dir  = $_SERVER['DOCUMENT_ROOT'];
            include_once($base_dir . "/master/analyticstracking.php");
        ?>
    </body>

    </html>
