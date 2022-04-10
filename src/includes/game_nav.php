<?php

$games = [  ["page" => "wordle", "link" => "/src/games/wordle",  "title" => "Wordle"],
            ["page" => "2048",   "link" => "/src/games/2048",    "title" => "2048"],
            ["page" => "game3",  "link" => "/src/games/game3",   "title" => "Game 3"],
            ["page" => "game4",  "link" => "/src/games/game4",   "title" => "Game 4"],
            ["page" => "game5",  "link" => "/src/games/game5",   "title" => "Game 5"],
            ["page" => "game6",  "link" => "/src/games/game6",   "title" => "Game 6"],
            ["page" => "game7",  "link" => "/src/games/game7",   "title" => "Game 7"],
            ["page" => "game8",  "link" => "/src/games/game8",   "title" => "Game 8"],
            ["page" => "game9",  "link" => "/src/games/game9",   "title" => "Game 9"],
            ["page" => "game10", "link" => "/src/games/game10",  "title" => "Game 10"],
            ["page" => "game11", "link" => "/src/games/game11",  "title" => "Game 11"],
            ["page" => "game12", "link" => "/src/games/game12",  "title" => "Game 12"],
            ["page" => "game13", "link" => "/src/games/game13",  "title" => "Game 13"],
            ["page" => "game14", "link" => "/src/games/game14",  "title" => "Game 14"],
            ["page" => "game15", "link" => "/src/games/game15",  "title" => "Game 15"]];
?>

<div id="game_nav_container">
    <ul class="nav nav-pills">  <?php   
        foreach ($games as $curr_game) {    ?>
            <li class="nav-item">
                <a class="nav-link <?= ($CURRENT_PAGE == $curr_game['page']) ? 'active' : '';?>" href="<?=$curr_game['link']?>"><?=$curr_game['title']?></a>
            </li>   <?php
        }   ?>
	</ul>
</div>