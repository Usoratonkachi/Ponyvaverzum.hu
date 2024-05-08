<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <script type="text/javascript" src = "js/felsofoku.js"></script>
  <title>Felsőfokú intézmények, melyeknél ingyenesen elérhetőek az alábbi kiadványok</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
    <div class="col-md-6 informaciosdiv">
    <h1>Felsőfokú intézmények, melyeknél ingyenesen elérhetőek az alábbi kiadványok:</h1>
        <div id = intezmenyinfo>
        <span class="cimke">Név:</span><span id="nev" class="adat"></span><br>
        <span class="cimke">Cím:</span><span id="cim" class="adat"></span><br>
        <span class="cimke">Telefon:</span><span id="tel" class="adat"></span><br>
        <span class="cimke">E-mail:</span><span id="mail" class="adat"></span><br>
      </div>
      <div id="szelekt">
      <label for ='orszagselect'>Ország:</label>
      <select id = 'orszagselect'></select>
      <br><br>
      <label for = 'varosselect'>Város:</label>
      <select id = 'varosselect'></select>
      <br><br>
      <label for = 'intezmenyselect'>Intézmény:</label>
      <select id = 'intezmenyselect'></select>
    </div>
  </div>
  <div class="col-md-6 kepekkonyv">
    <div id=kepekkonyv>
    <?php include('logicals/megjelenit.php'); ?> <br>
    </div>
  </div>
  </body>
</html>
