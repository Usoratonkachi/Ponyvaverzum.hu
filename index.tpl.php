<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $ablakcim['cim'] . (isset($ablakcim['mottó']) ? (' | ' . $ablakcim['mottó']) : '') ?></title>
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <?php if(file_exists('./style/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./style/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
    <script src="js/menu.js" defer></script>
</head>
<body>
<header>
    <?php if(isset($_SESSION['login'])) { ?>
        Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong>
    <?php } ?>
    <img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
    <div id="content">
        <nav id="primary_nav_wrap">
            <ul id="menu1">
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if((!isset($_SESSION['login']) && $oldal['menun'][0]) || (isset($_SESSION['login']) && $oldal['menun'][1])) { ?>
                        <li<?= ($oldal == $keres ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                                <?= $oldal['szoveg'] ?>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>
    </div> <!-- content bezárása -->
</header>
    <div id="content-wrapper"> 
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div> 
    <footer class="footer">
        <?php include("./logicals/footer.php"); ?>
    </footer>
</body>
</html>
