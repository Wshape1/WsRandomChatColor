<?php

namespace WsRandomChatColor;

use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerChatEvent;

class WMain extends PluginBase implements Listener{
public function onEnable(){
		$this->getLogger()->info("随机聊天颜色插件已开启，作者Wshape1");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function Chat(PlayerChatEvent $event){
	$msg=$event->getMessage();
	$cl=["§0","§1","§2","§3","§4","§5","§6","§7","§8","§9","§a","§b","§c","§d","§e","§f",];
	$c=$cl[mt_rand(0,15)];
	$event->setMessage($c.$msg);
	}
	}
	