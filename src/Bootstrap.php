<?php

declare(strict_types=1);

namespace Fedek6\WpMPB;

use Fedek6\WpMPB\Core\HooksCollection;

class Bootstrap
{
    private $components = [];

    private $version;

    private $assetsUrl;

    private $pluginName;

    public function __construct(string $pluginName, string $assetsUrl, string $version)
    {
        $this->pluginName = $pluginName;
        $this->assetsUrl = $assetsUrl;
        $this->version = $version;
    }

    public function registerComponent(string $name, string $component)
    {
        if (class_exists($component)) {
            $this->components[$name] = $component;
        } else {
            throw new \Error("Component {$component} does not exist.");
        }
    }

    public function run() 
    {
        foreach ($this->components as $component) {
            $hooksCollection = new HooksCollection;
            $componentInstance = new $component($this->pluginName, $this->assetsUrl, $this->version);
            $componentInstance->run();
            $hooksCollection->run();
        }
    }
}
