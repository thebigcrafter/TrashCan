<?php

declare(strict_types=1);

namespace MintoD\TrashCan;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\type\InvMenuTypeIds;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class TrashCan extends PluginBase
{
    /**
     * @var Config
     */
    private Config $config;

    /**
     * @return void
     */
    public function onEnable(): void
    {
        $this->config = $this->getConfig();

        if (!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($this);
        }
    }

    /**
     * @param CommandSender $sender
     * @param Command $command
     * @param string $label
     * @param array $args
     *
     * @return bool
     */
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if ($command->getName() === "trashcan") {
            if ($sender instanceof Player) {
                $menu = InvMenu::create(InvMenuTypeIds::TYPE_CHEST);
                $menu->setName($this->config->get("trash.can.title"));

                $menu->send($sender);
            } else {
                $sender->sendMessage(TextFormat::DARK_RED . "Please run this command in-game.");
            }
        }
        return true;
    }
}