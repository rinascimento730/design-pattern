<?php
require_once 'HomeTheaterFacade.class.php';

$home_theater = new HomeTheaterFacade();

$home_theater->watchMovie();
$home_theater->endMovie();
$home_theater->listenToCd();
$home_theater->endCd();
$home_theater->listenToRadio();
$home_theater->endRadio();


