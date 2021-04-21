<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Components;

use Fedek6\WpMPB\Core\Component;
use Fedek6\WpMPB\Core\Hook;

class I18n extends Component
{
    public function loadTextDomain()
    {
        load_plugin_textdomain( 
            $this->pluginName, 
            false, 
            $this->pluginPath . '/languages' 
        );
    }

    public function init()
    {
        $hook = new Hook(
            'init',
            $this,
            'loadTextDomain'
        );

        $this->hooks->addAction($hook);
    }
}
