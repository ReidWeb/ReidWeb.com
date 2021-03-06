<?php
$pagetitle = "Contact | Peter Reid";
$headerContent ="";
include_once("../master/header.php");
?>
    <div id="content">
        <div id="contact-banner">
            <div class="glass">
                <div class="container">
                    <h1 class="header white-text" style="margin:0; padding-top:170px;">Contact</h1>
                </div>

            </div>
        </div>

        <div class="container" style="padding-top:10px;">
            <p>
                There are a number of different means by which you can contact me, the first of these is via <a href="mailto:contact@reidweb.com" target="_blank">email.</a>
            </p>
            <p>
                I can also be contacted via my <a href="https://uk.linkedin.com/in/reidweb" target="_blank">LinkedIn</a> profile or via my <a href="https://twitter.com/ReidWeb" target="_blank">Twitter</a> profile.
            </p>
            <p>

                If you wish to send me a sensitive email, you can retrieve my PGP public key from my <a href="https://keybase.io/peterreid" target="_blank">KeyBase</a> profile; send the email to one of the email addresses associated with my PGP key.

            </p>

        </div>
    </div>

    <?php
$footerContentCSS = "<link href='/css/contact.css' type='text/css' rel='stylesheet' media='screen,projection'/>";
$footerContentJS = "<script src='/js/contact.js'></script>";
include_once("../master/footer.php"); ?>
<script>
    setSelectedPage();

</script>
