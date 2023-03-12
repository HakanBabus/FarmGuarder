<?php

namespace HakanBabus\FG;

use pocketmine\event\entity\EntityTrampleFarmlandEvent;
use pocketmine\event\EventPriority;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvent(
            EntityTrampleFarmlandEvent::class,
            function (EntityTrampleFarmlandEvent $event): void{
                $event->cancel();
            },
            EventPriority::NORMAL,
            $this
        );
    }

}