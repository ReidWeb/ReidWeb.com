<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript">
  $(window).load(function() {
    $(".loader").fadeOut("slow");
  });

</script>
<style>
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-image: url("/img/pattern1.png");
    background-repeat: repeat;
    background-color: #4fc3f7;
  }

  #logo {
    width: 10%;
  }
  #logobox{
    width: 100%;
    text-align: center;
  }
  .vertpadder{
    height:25%;
  }
  /*Small Devices*/

@media (max-width: 949px) {
  #logo {
    width: 35%;
  }
  #loadText {
    font-size: 24pt;
  }
}
</style>

<div class="loader">
  <div class="progress  light-blue lighten-2" style="margin-top:0%">
    <div class="indeterminate white"></div>
  </div>
  <div class="vertpadder"></div>
  <div id="logobox"><img id="logo" src="/img/icons/white-icons/mstile-310x310.png"><h1 id="loadText" style="font-family:Roboto,GillSans, Calibri, Trebuchet,sans-serif;color:white;">Loading...</h1></div>
  <div class="vertpadder"></div>
</div>
 <script type="text/javascript">
  $(document).ready(function() {
    function setHeight() {
      availableHeight = $(window).innerHeight() - $('#logo').innerHeight();
      $('.vertpadder').css('min-height', availableHeight / 2);
    }
    setHeight();

    $(window).resize(function() {
      setHeight();
    });

  });

</script>
