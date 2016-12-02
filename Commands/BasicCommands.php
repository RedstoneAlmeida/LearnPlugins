<?php

namespace YouNameSpace;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;

class BasicCommands extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info(Color::GREEN."[Youtube] Enabled");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, $args){
        switch($command->getName()){
              case "youcommand":
                    break;
        }
    }
}
