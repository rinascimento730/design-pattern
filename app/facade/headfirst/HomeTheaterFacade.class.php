<?php
require_once 'Amplifier.class.php';
require_once 'Tuner.class.php';
require_once 'Screen.class.php';
require_once 'PopcornPopper.class.php';
require_once 'Projector.class.php';
require_once 'TheaterLights.class.php';
require_once 'CdPlayer.class.php';
require_once 'DvdPlayer.class.php';
require_once '../../common/Util.trait.php';

class HomeTheaterFacade
{
	use Util;

	private $amp;
	private $tuner;
	private $dvd;
	private $cd;
	private $projector;
	private $lights;
	private $screen;
	private $popper;

	public function __construct(
		Amplifier $amp,
		Tuner $tuner,
		DvdPlayer $dvd,
		CdPlayer $cd,
		Projector $projector,
		TheaterLights $lights,
		Screen $screen,
		PopcornPopper $popper
	)
	{
		$this->amp       = $amp;
		$this->tuner     = $tuner;
		$this->dvd       = $dvd;
		$this->cd        = $cd;
		$this->projector = $projector;
		$this->lights    = $lights;
		$this->screen    = $screen;
		$this->popper    = $popper;
	}

	public function watchMovie($movie = null)
	{
		if (!is_string($movie) || empty($movie)) {
			throw new Exception("映画を指定してください。");
		}

		$this->express("映画を見る準備を始めます。");
		$this->popper->on();
		$this->popper->pop();

		$this->lights->dim(10);
		$this->screen->down();
		$this->projector->on();
		$this->projector->WideScreenMode();
		$this->amp->on();
		$this->amp->setDvd($this->dvd);
		$this->amp->setSurroundSound();
		$this->amp->setVolume(5);
		$this->dvd->on();
		$this->dvd->play();
	}

	public function endMovie()
	{
		$this->express("ムービーシアターを停止します。");
		$this->popper->off();
		$this->lights->on();
		$this->screen->up();
		$this->projector->off();
		$this->amp->off();
		$this->dvd->stop();
		$this->dvd->eject();
		$this->dvd->off();
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