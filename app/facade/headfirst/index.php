<?php
require_once 'HomeTheaterFacade.class.php';

$amp       = new Amplifier();
$tuner     = new Tuner();
$dvd       = new DvdPlayer($amp);
$cd        = new CdPlayer($amp);
$projector = new Projector();
$lights    = new TheaterLights();
$screen    = new Screen();
$popper    = new PopcornPopper();

$home_theater = new HomeTheaterFacade(
	$amp,
	$tuner,
	$dvd,
	$cd,
	$projector,
	$lights,
	$screen,
	$popper
);

$home_theater->watchMovie("E.T.");
$home_theater->endMovie();
$home_theater->listenToCd();
$home_theater->endCd();
$home_theater->listenToRadio();
$home_theater->endRadio();
