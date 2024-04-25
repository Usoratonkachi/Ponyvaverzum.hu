<?php
print_r($_GET); // kiírja a GET változó értékeit
print_r($_POST); // kiírja a POST változó értékeit.
?>
    </pre>
<?php
echo "Email: ".$_POST["email"]."<br>";
echo "Név: ".$_POST["nev"]."<br>";
echo "Jelszó: ".$_POST["jelszo"]."<br>";
echo "Megye: ".$_POST["varos"]."<br>";
echo "Kor: ".$_POST["kor"]."<br>";
echo "Nem: ".$_POST["nem"]."<br>";
echo "Megjegyzés: ".$_POST["megjegyzes"]."<br>";
    - 35 -
?>