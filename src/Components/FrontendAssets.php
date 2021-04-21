<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Components;

use Fedek6\WpMPB\Core\Component;
use Fedek6\WpMPB\Core\Hook;

class FrontendAssets extends Component
{
    public function loadAssets()
    {
        $cssName = $this->pluginName . '-frontend';

        wp_register_style($cssName, $this->assetsUrl . 'css/frontend.css', false, $this->version);
        wp_enqueue_style($cssName);
    }

    public function init()
    {
        $hook = new Hook(
            'wp_enqueue_scripts',
            $this,
            'loadAssets'
        );

        $this->hooks->addAction($hook);
    }
}
