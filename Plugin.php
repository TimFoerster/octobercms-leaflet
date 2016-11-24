<?php namespace TimFoerster\Leaflet;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'TimFoerster\Leaflet\Components\Map' => 'map'
        ];
    }

    public function registerSettings()
    {
    }
}
