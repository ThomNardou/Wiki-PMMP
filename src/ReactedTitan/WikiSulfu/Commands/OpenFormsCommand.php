<?php

namespace ReactedTitan\WikiSulfu\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use ReactedTitan\WikiSulfu\API\Forms\WikiMainForms;

class OpenFormsCommand extends Command
{
	public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
	{
		parent::__construct($name, $description, $usageMessage, $aliases);
		$this->setPermission("wikiCommand.use");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args)
	{
		WikiMainForms::OpenMainForms($sender);
	}
}