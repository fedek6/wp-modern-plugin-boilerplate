<?php

declare(strict_types=1);

namespace Fedek6\WpMPB;

class Bootstrap
{
    private $components = [];

    private $version;

    private $assetsUrl;

    private $pluginName;

    private $pluginPath;

    private $registeredComponents = [];

    public function __construct(
        string $pluginName,
        string $assetsUrl,
        string $pluginPath,
        string $version
    ) {
        $this->pluginName = $pluginName;
        $this->assetsUrl = $assetsUrl;
        $this->pluginPath = $pluginPath;
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
        foreach ($this->components as $name => $component) {
            $this->registeredComponents[$name] = new $component(
                $this->pluginName,
                $this->assetsUrl,
                $this->pluginPath,
                $this->version
            );

            $this->registeredComponents[$name]->run();
        }
    }
}
