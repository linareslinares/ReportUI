<?php

namespace linareslinares;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use linareslinares\command\reportCommand;
use pocketmine\utils\SingletonTrait;

class ReportUI extends PluginBase {

    public Config $config;
    public Prefix = TextFormat::YELLOW. TextFormat::BOLD. "REPORT ";

    use SingletonTrait;
    
    public function onLoad(): void {
        self::setInstance($this);
    }

    public function onEnable(): void {
        $this->getServer()->getLogger(TextFormat::GREEN. "Sistema de reportes cargado.");
        $this->saveDefaultConfig();
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->saveResource("config.yml");
        $this->getServer()->getPluginManager()->registerEvents(new playerEvent($this), $this);
        $this->getServer()->getCommandMap()->register("report", new reportCommand($this));
    }
}