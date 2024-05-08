<script type="text/javascript" src="js/main.js"></script>
<div class="iframe-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="form-container">
    <h1>Kapcsolat</h1>
<form name="ellenor" action="logicals/kapcsolat_feldolgozas.php" onsubmit="return ellenoriz();" method="post">
<div>
<label><input type="text" id="nev" name="nev" size="20" maxlength="40">Név (minimum 5 karakter): </label>
<br/>
<label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail (kötelező): </label>
<br/>
<label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet (kötelező): </label>
<br/>
<input id="kuld" type="submit" value="Küld">
<button onclick="ellenoriz();" type="button">Ellenőriz</button>
</div>
</form>
    </div> 
