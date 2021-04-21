<?php

declare(strict_types=1);

namespace Fedek6\WpMPB;

use Fedek6\WpMPB\Core\HooksCollection;

class Bootstrap
{
    private $components = [];

    private $hooksCollection;

    public function __construct()
    {
        $this->hooksCollection = new HooksCollection;
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
            $component = new $component($this->hooksCollection);
            $component->run();
        }

        $this->hooksCollection->run();
    }
}
