<?php

namespace ReactedTitan\WikiSulfu\API\Forms;

use jojoe77777\FormAPI\SimpleForm;
use pocketmine\player\Player;
use ReactedTitan\WikiSulfu\API\Forms\WikiMainForms;
use ReactedTitan\WikiSulfu\Main;

class ExempleForms extends SimpleForm
{
	public static function OpenRankUpForms(Player $player)
	{
		$forms = new SimpleForm(
			function (Player $player, $data = null) {

				if ($data === null) {
					return;
				}
				if ($data == 0) {
					WikiMainForms::OpenMainForms($player);
				}
			}
		);

		$info = Main::getInstance()->config->get("Info")["Title"];
		$forms->setTitle("§4§lWiki §r- §b" . $info);

		$info = Main::getInstance()->config->get("Info")["Description"];
		$forms->setContent("§e" . $info);

		$forms->addButton("Retour", 0, "textures/icones/diamond_sword:path");
		$player->sendForm($forms);
	}
}

