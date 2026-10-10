<?php

declare(strict_types=1);

namespace muqsit\invmenu;

use pocketmine\player\Player;
use pocketmine\plugin\Plugin;

final class InvMenu {
	public static function create(string $type) : self {
		return new self();
	}

	public function setName(string $name) : void {}

	public function send(Player $player) : void {}
}

final class InvMenuHandler {
	public static function isRegistered() : bool {
		return false;
	}

	public static function register(Plugin $plugin) : void {}
}

namespace muqsit\invmenu\type;

final class InvMenuTypeIds {
	public const TYPE_CHEST = "minecraft:chest";
}
