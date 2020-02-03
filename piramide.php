<?php
echo("Hoeveel rijen stenen moeten er boven elkaar?".PHP_EOL);
$hoeveel = readline();
$stone = "";
    for($x=1;$x<=$hoeveel;$x++){
        echo ($stone.="*") . PHP_EOL;
    }
