<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Components;

use Fedek6\WpMPB\Core\Component;
use Fedek6\WpMPB\Core\Hook;

class AdminAssets extends Component
{
    public function loadAssets()
    {
        $cssName = $this->pluginName . '-backend';

        wp_register_style($cssName, $this->assetsUrl . '/css/admin-style.css', false, $this->version);
        wp_enqueue_style($cssName);
    }

    protected function init()
    {
        $hook = new Hook(
            'admin_enqueue_scripts',
            $this,
            'loadAssets'
        );

        $this->hooks->addAction($hook);
    }
}
