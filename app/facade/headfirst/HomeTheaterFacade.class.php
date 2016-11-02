<?php
require_once 'Amplifier.class.php';
require_once 'Tuner.class.php';
require_once 'Screen.class.php';
require_once 'PopcornPopper.class.php';
require_once 'Projector.class.php';
require_once 'TheaterLights.class.php';
require_once 'CdPlayer.class.php';
require_once 'DvdPlayer.class.php';

class HomeTheaterFacade
{
	public function watchMovie()
	{
		echo "watchMovie<br>\n";
	}

	public function endMovie()
	{
		echo "endMovie<br>\n";
	}

	public function listenToCd()
	{
		echo "listenToCd<br>\n";
	}

	public function endCd()
	{
		echo "endCd<br>\n";
	}

	public function listenToRadio()
	{
		echo "listenToRadio<br>\n";
	}

	public function endRadio()
	{
		echo "endRadio<br>\n";
	}
}