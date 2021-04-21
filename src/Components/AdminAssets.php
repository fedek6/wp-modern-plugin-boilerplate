<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Components;

use Fedek6\WpMPB\Core\Hook;

class AdminAssets
{
    private $hooksCollection;

    public function __construct(\Fedek6\WpMPB\Core\HooksCollection $hooksCollection)
    {
        $this->hooksCollection = $hooksCollection;
    }

    public function loadAssets()
    {
        wp_register_style( 'custom_wp_admin_css', plugin_dir_url( __FILE__ ) . 'admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
    }

    public function run()
    {
        
        $hook = new Hook(
            'admin_enqueue_scripts',
            $this,
            'loadAssets'
        );

        $this->hooksCollection->addAction($hook);
    }
}
