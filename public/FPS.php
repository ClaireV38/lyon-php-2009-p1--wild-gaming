<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <title>FPS - WildGaming</title>
</head>
<body class="fpsPage">
<header>
    <?php include_once '_headerSidePageResponsive.php' ?>
    <?php include_once '../src/function.php'; ?>

    <!-- Code HEADER -->
</header>

<div class="carousel">
    <!-- Code Carousel -->
</div>

<section class="fps" id="article">
    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div class="cover">
                <img id="cover1" src=" <?= $dataBase['FPS']['Doom Eternal']['Image'] ?>" "cover">
            </div>
            <div class="details">
                <div id="title">
                    <h3><?= array_keys($dataBase['FPS'])[0]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Doom Eternal']['Release'] . ")" ?></span></h3>
                </div>

                <div id="infos">
                    <ul>
                        <li id="listLeft">Studio : <?= ($dataBase)['FPS']['Doom Eternal']['Studio'] ?> </li>
                        <li id="listLeft">PEGI : <?= ($dataBase)['FPS']['Doom Eternal']['PEGI'] ?></li>
                        <p id="listLeft">Synopsis : <?= ($dataBase)['FPS']['Doom Eternal']['Synopsis'] ?></p>
                        <a id="listLeft" href="https://www.metacritic.com/game/playstation-4/doom-eternal" target="_blank">Note : 87/100</a>
                        <a id="listLeft" href="https://bethesda.net/en/game/doom" target="_blank">Acheter</a>
                    </ul>
                </div>
        </div>
    </div>
    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['FPS'])[1]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Call of Duty : Modern Warfare']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['FPS']['Call of Duty : Modern Warfare']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['FPS']['Call of Duty : Modern Warfare']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['FPS']['Call of Duty : Modern Warfare']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/playstation-4/call-of-duty-modern-warfare" target="_blank">Note : 80/100</a>
                    <a id="listRight" href="https://www.callofduty.com/fr/modernwarfare/buy" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="https://via.placeholder.com/150/0000FF/808080" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3><?= array_keys($dataBase['FPS'])[2]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Battlefield 5']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['FPS']['Battlefield 5']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['FPS']['Battlefield 5']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['FPS']['Battlefield 5']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/playstation-4/battlefield-v" target="_blank">Note : 73/100</a>
                    <a id="listLeft" href="https://www.ea.com/fr-fr/games/battlefield/battlefield-5/buy" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['FPS'])[3]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Counter Strike : Global Offensive']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['FPS']['Counter Strike : Global Offensive']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['FPS']['Counter Strike : Global Offensive']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['FPS']['Counter Strike : Global Offensive']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/counter-strike-global-offensive" target="_blank">Note : 83/100</a>
                    <a id="listRight" href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="https://via.placeholder.com/150/0000FF/808080" alt="cover">
        </div>
    </div>

    <div class="gridLeft">
        <div class="cover">
            <img id="cover1" src="https://images-na.ssl-images-amazon.com/images/I/61hSuJRkylL._AC_SX385_.jpg" alt="cover">
        </div>
        <div class="details">
            <div id="title">
                <h3><?= array_keys($dataBase['FPS'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Star Wars Battlefront 2']['Release'] . ")" ?></span></h3>
            </div>

            <div id="infos">
                <ul>
                    <li id="listLeft">Studio : <?= ($dataBase)['FPS']['Star Wars Battlefront 2']['Studio'] ?> </li>
                    <li id="listLeft">PEGI : <?= ($dataBase)['FPS']['Star Wars Battlefront 2']['PEGI'] ?></li>
                    <p id="listLeft">Synopsis : <?= ($dataBase)['FPS']['Star Wars Battlefront 2']['Synopsis'] ?></p>
                    <a id="listLeft" href="https://www.metacritic.com/game/pc/star-wars-battlefront-ii" target="_blank">Note : 65/100</a>
                    <a id="listLeft" href="https://www.ea.com/games/starwars/battlefront/star-wars-battlefront-2/buy" target="_blank">Acheter</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="gridRight">
        <div class="detailRight">
            <div id="titleRight">
                <h3><?= array_keys($dataBase['FPS'])[5]?><span style="font-size: 20px; font-style: italic"><?= " (" . ($dataBase)['FPS']['Borderlands 3']['Release'] . ")" ?></h3>
            </div>
            <div id="infosRight">
                <ul>
                    <li id="listRight">Studio : <?= ($dataBase)['FPS']['Borderlands 3']['Studio'] ?></li>
                    <li id="listRight">PEGI : <?= ($dataBase)['FPS']['Borderlands 3']['PEGI'] ?></li>
                    <p id="listRight">Synopsis : <?= ($dataBase)['FPS']['Borderlands 3']['Synopsis'] ?></p>
                    <a id="listRight" href="https://www.metacritic.com/game/pc/borderlands-3" target="_blank">Note : 81/100</a>
                    <a id="listRight" href="https://borderlands.com/fr-FR/shop/" target="_blank"> Acheter</a>
                </ul>
            </div>
        </div>
        <div class="coverRight">
            <img id="cover2" src="https://via.placeholder.com/150/0000FF/808080" alt="cover">
        </div>
    </div>
    <script>
        const article = document.getElementById("article");
        const navbarColor = document.querySelector(".navbar");
        switch (article.className) {
            case ('rpg'):
                navbarColor.style.backgroundColor = "var(--navbar-rpg-backgrnd)";
                break
            case ('action'):
                navbarColor.style.backgroundColor = "var(--navbar-action-backgrnd)";
                break
            case ('simulation'):
                navbarColor.style.backgroundColor = "var(--navbar-simu-backgrnd)";
                break
            case ('sport'):
                navbarColor.style.backgroundColor = "var(--navbar-sport-backgrnd)";
                break
            case ('strategie'):
                navbarColor.style.backgroundColor = "var(--navbar-strategy-backgrnd)";
                break
            case ('fps'):
                navbarColor.style.backgroundColor = "var(--navbar-fps-backgrnd)";
        }
    </script>

</section>

<form>
    <!-- Code pour le form -->
</form>

<?php

include '_footer.php';
?>
