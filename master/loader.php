<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript">
  $(window).load(function() {
    $(".loader").fadeOut("slow");
  })
  $(document).ready(function() {
    function setHeight() {
      availableHeight = $(window).innerHeight() - $('#logorow').innerHeight();
      $('.padder').css('min-height', availableHeight / 2);
    }
    setHeight();

    $(window).resize(function() {
      setHeight();
    });
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
    width: 100%;
  }

</style>

<div class="loader">
  <div class="progress  light-blue lighten-2" style="margin-top:0%">
    <div class="indeterminate white"></div>
  </div>
  <div class="row">
    <div class="col s12 m12 l12 padder"></div>
  </div>
  <div id="logorow">
    <div class="row">
      <div class="col s4 m4 l5">
        <p></p>
      </div>
      <div class="col s4 m4 l2"><img id="logo" src="/img/icons/white-icons/mstile-310x310.png"></div>
      <div class="col s4 m4 l5"></div>
    </div>
    <div class="row">
      <div class="col s4 m4 l5">
        <p></p>
      </div>
      <div class="col s4 m4 l2">
        <h1 class="white-text thin" style="text-align:center;">Loading...</h1></div>
      <div class="col s4 m4 l5"></div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m12 l12 padder"></div>
  </div>
</div>
