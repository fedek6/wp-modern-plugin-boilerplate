<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Core;

abstract class Component implements ComponentInterface
{
    protected $hooks;

    protected $pluginName;

    protected $assetsUrl;

    protected $version;

    public function __construct(string $pluginName, string $assetsUrl, string $version)
    {
        $this->pluginName = $pluginName;
        $this->assetsUrl = $assetsUrl;
        $this->version = $version;
        $this->hooks = new HooksCollection;
    }

    public function run()
    {
        $this->init();
        $this->hooks->run();
    }
}
