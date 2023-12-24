<?php

namespace ReactedTitan\WikiSulfu;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;
use ReactedTitan\WikiSulfu\Commands\OpenFormsCommand;

class Main extends PluginBase
{
	use SingletonTrait;
	public Config $config;
	protected function onEnable(): void
	{
		self::setInstance($this);
		$this->config = $this->getConfig();
		$this->saveDefaultConfig();
		$this->getLogger()->info("Le plugin WikiSulfu s'est bien lancé");
		$this->getServer()->getCommandMap()->registerAll("commands", [new OpenFormsCommand("wiki", "Ouvrir le Wiki")]);
	}

	protected function onDisable(): void
	{
		Server::getInstance()->getLogger()->info("Le plugin WikiSulfu s'est bien arrêté");
	}
}