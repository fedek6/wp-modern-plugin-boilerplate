<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Core;

abstract class Component
{
    protected $hooks;

    protected $pluginName;

    protected $assetsUrl;

    protected $pluginPath;

    protected $version;

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
        $this->hooks = new HooksCollection;
    }

    abstract protected function init();

    public function run()
    {
        $this->init();
        $this->hooks->run();
    }
}
