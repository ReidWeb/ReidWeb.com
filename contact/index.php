<?php
$pagetitle = "Contact | Peter Reid";
$headerContent ="";
include_once("../master/header.php");
?>
  <div id="content">

      <div class="container" style="padding-top:10px; z-index:2;">
        <div class="card large" id="content-card">
          <div id="content-card-image-container">
            <div class="glass">
              <div id="content-card-title">Contact</div>
            </div>
            <div id="content-card-content">
              <h5 class="content-card-header bold">Email</h5>
              <p>I can be contacted via email using the form below, please select a 'topic' when you complete the form to ensure that your message is addressed correctly.</p>
              <a class="waves-effect waves-light light-blue lighten-2 btn modal-trigger" style="margin-top:10px;" data-target="mailFormModal"><i class="material-icons left">email</i>Send me an email</a>
              <?php include_once("contactForm.php"); ?>
            </div>
          </div>

        </div>
      </div>
  </div>

  <?php
$footerContentCSS ="<link href='/css/contact.css' type='text/css' rel='stylesheet' media='screen,projection'/>";
$footerContentJS ="<script src='/js/smoothscroll.js'></script><script src='/js/index.js'></script>";
include_once("../master/footer.php"); ?>
    <script>
      setSelectedPage();

    </script>
