<?php

namespace Bolt\Extension\Bolt\ZocialIcons;

use Bolt;

class ZocialIconsExtension extends \Bolt\BaseExtension
{
    /**
     * @var Extension name
     */
    const NAME = "ZocialIcons";

    public function getName()
    {
        return Extension::NAME;
    }

    public function initialize()
    {
        /*
         * Frontend
         */
        if ($this->app['config']->getWhichEnd() == 'frontend') {
            $this->addCSS('css/zocial.css', true);
        }

    }
}
