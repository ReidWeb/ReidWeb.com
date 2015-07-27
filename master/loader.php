<style>
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-repeat: repeat;
    background-color: #4fc3f7;
  }

  #logo {
    height:100%;
  }
  #logobox{
    height:100%;
    text-align: center;
  }
  /*Small Devices*/

</style>

<div class="loader">
  <div class="progress  light-blue lighten-2" style="margin-top:0%">
    <div class="indeterminate white"></div>
  </div>
  <div id="logobox"><img id="logo" src="/img/loadingLogo.svg"></div>
</div>

