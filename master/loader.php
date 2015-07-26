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
    height:3%;
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
  <div id="logobox"><img id="logo" src="/img/icons/vector-graphics/logowhite.svg"><h1 id="loadText" style="font-family:Roboto,GillSans, Calibri, Trebuchet,sans-serif;color:white;">Loading...</h1></div>
  <div class="vertpadder"></div>
</div>

