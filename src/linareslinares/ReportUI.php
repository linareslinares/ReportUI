<?php

namespace linareslinares;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

class ReportUI extends PluginBase {

    public Config $config;

    public function onEnable(): void {
        $this->getServer()->getLogger(TextFormat::GREEN. "Sistema de reportes cargado.");
        $this->saveDefaultConfig();
        $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->saveResource("config.yml");
    }
}