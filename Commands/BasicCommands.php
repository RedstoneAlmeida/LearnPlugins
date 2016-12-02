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
                    // Sub-Commands /youcommand <sub[0]>
                    if(isset($args[0]){
                        $p1 = $this->getServer()->getPlayer($args[0]);
                        // Sub-Commands /youcommand <sub[0]> <sub[1]>
                        if(isset($args[1]){
                            $p2 = $this->getServer()->getPlayer($args[1]);
                            $sender->sendMessage("Player 1: ".$p1->getName());
                            $sender->sendMessage("Player 2: ".$p2->getName());
                        }
                    }
                    break;
        }
    }
}
