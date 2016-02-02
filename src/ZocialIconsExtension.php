<?php

namespace Bolt\Extension\Bolt\ZocialIcons;

use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;
use Bolt\Extension\SimpleExtension;

class ZocialIconsExtension extends SimpleExtension
{
    /**
     * {@inheritdoc}
     */
    protected function registerAssets()
    {
        return [
            (new Stylesheet('css/zocial.css'))->setLate(true)->setZone(Zone::FRONTEND)
        ];
    }
}
