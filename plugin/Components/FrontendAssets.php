<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Components;

use Fedek6\WpMPB\Core\Component;
use Fedek6\WpMPB\Core\Hook;

/**
 * Component for loading admin assets.
 * 
 * @package     wp-modern-plugin-boilerplate
 * @subpackage  core
 * @version     1.0.0
 * @author      Konrad Fedorczyk <contact@realhe.ro>
 */
class FrontendAssets extends Component
{
    /**
     * Load component' CSS.
     */
    private function loadCss()
    {
        $cssName = $this->pluginName . '-frontend';

        wp_register_style(
            $cssName,
            $this->assetsUrl . '/css/frontend.css',
            false,
            $this->version
        );

        wp_enqueue_style($cssName);
    }

    /**
     * Load component' JS.
     */
    private function loadJs()
    {
        $jsName = $this->pluginName . '-frontend';

        wp_register_script(
            $jsName,
            $this->assetsUrl . '/js/frontend.js',
            false,
            $this->version
        );

        wp_enqueue_script($jsName);
    }

    /**
     * Grouping hook.
     * 
     * This must be public.
     */
    public function hook()
    {
        $this->loadCss();
        $this->loadJs();
    }

    /**
     * @inheritdoc
     */
    protected function init()
    {
        $hook = new Hook(
            'wp_enqueue_scripts',
            $this,
            'hook'
        );

        $this->hooks->addAction($hook);
    }
}
