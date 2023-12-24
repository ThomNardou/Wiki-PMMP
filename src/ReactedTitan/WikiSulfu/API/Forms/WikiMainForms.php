<?php

namespace ReactedTitan\WikiSulfu\API\Forms;

use jojoe77777\FormAPI\SimpleForm;
use pocketmine\player\Player;
use ReactedTitan\WikiSulfu\API\Forms\ExempleForms;

class WikiMainForms extends SimpleForm
{
	public static function OpenMainForms(Player $player)
	{
		$forms = new SimpleForm(
			function (Player $player, $data = null) {

				if ($data === null) {
					return;
				}
				if ($data == 0) {
					ExempleForms::OpenRankUpForms($player);
				}
			}
		);

		$forms->setTitle("§4§lWiki");
		$forms->setContent("§eBienvenue sur le Wiki");
		$forms->addButton("Rankup", 0, "textures/icones/diamond_sword:path");
		$player->sendForm($forms);
	}
}
