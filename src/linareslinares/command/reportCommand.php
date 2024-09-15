<?php

namespace linareslinares\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use linareslinares\ReportUI;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class reportCommand extends Command {
  
  public function __construc() {
    parent::__construc("report", "report system");
    $this->setPermission("report.command");
  }
  
  public function execute(CommandSender $sender, string $commandLabel, array $args) : void {
    
    if ($sender instanceof Player){
      
      if (!$sender->hasPermission("report.command")){
        $sender->sendMessage(TextFormat::YELLOW. "No tienes permisos para usar este comando.");
      }
      
      $sender->sendMessage(TextFormat::GREEN. "Hacer reportes falsos es sancionable!");
      
    }
    
  }
  
}