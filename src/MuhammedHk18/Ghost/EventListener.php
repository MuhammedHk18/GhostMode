<?php

namespace MuhammedHk18\Ghost;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;
use MuhammedHk18\Ghost\Main;

class EventListener implements Listener
{

    /**
     * @param PlayerQuitEvent $event
     * @return void
     */

    public function playerQuit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        if(Main::getInstance()->isGhost($player)){
            Main::getInstance()->turnOffGhost($player);
        }
    }
}