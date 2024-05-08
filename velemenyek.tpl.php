<h2>Első videónk a témában.</h2>
<p>
    Hasonló videókat várunk a: <a href="mailto:ugyfelszolgalat@ponyvaverzum.hu">tartalomgyar@ponyvaverzum.hu</a> email címre! </p>
</p>
<div class="video-container">
    <iframe width="1280" height="720" src="https://www.youtube.com/embed/Tu_mg1N5U7I" title="Katalin V. Tóth - 200 - A helyi könyvklub kedvencei 2023. február||Könyvajánló" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<?php include('logicals/engedely.php'); ?>

<br>

</p>
 <style type="text/css">
        label { display: block; }
    </style>
    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
   <div id=feltolt> <form action="logicals/kepfeltolt.php" method="post"
                enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" required>
        </label>
        <label>Második:
            <input type="file" name="masodik">
        </label>
        <label>Harmadik:
            <input type="file" name="harmadik">
        </label>        
        <input type="submit" name="kuld">
      </form>
      </div>    
    
</body>
</html>