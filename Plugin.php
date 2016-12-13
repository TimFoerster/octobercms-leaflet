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

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions() {
        return [
            'timfoerster.leaflet.maps' => [
                'tab' => 'timfoerster.leaflet::lang.permissions.maps.tab',
                'label' => 'timfoerster.leaflet::lang.permissions.maps.label',
            ],
        ];
    }
}
