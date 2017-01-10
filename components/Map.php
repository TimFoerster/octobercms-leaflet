<?php

namespace TimFoerster\Leaflet\Components;

use TimFoerster\Leaflet\Models\Maps;
use Request;

class Map extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'timfoerster.leaflet::lang.component.name',
            'description' => 'timfoerster.leaflet::lang.component.map.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'map' => [
                'title' => 'timfoerster.leaflet::lang.component.map.title',
                'description' => 'timfoerster.leaflet::lang.component.map.description',
                'type' => 'dropdown',
                'required' => true,
            ],
            'showOnlyObject' => [
                'title' => 'timfoerster.leaflet::lang.component.show_only_object.title',
                'description' => 'timfoerster.leaflet::lang.component.show_only_object.description',
                'type' => 'dropdown',
                'depends' => ['map']
            ],
            'fieldId' => [
                'title' => 'timfoerster.leaflet::lang.component.fieldId.title',
                'description' => 'timfoerster.leaflet::lang.component.fieldId.description',
                'default' => 'map',
                'type' => 'string',
                'required' => true,
            ],
            'height' => [
                'title' => 'timfoerster.leaflet::lang.component.height.title',
                'description' => 'timfoerster.leaflet::lang.component.height.description',
                'default' => '400px',
                'type' => 'string',
                'required' => true,
            ],
            'latitude' => [
                'title' => 'timfoerster.leaflet::lang.component.latitude.title',
                'description' => 'timfoerster.leaflet::lang.component.latitude.description',
                'default' => 0,
                'type' => 'string',
                'required' => true,
            ],
            'longitude' => [
                'title' => 'timfoerster.leaflet::lang.component.longitude.title',
                'description' => 'timfoerster.leaflet::lang.component.longitude.description',
                'default' => 0,
                'type' => 'string',
                'required' => true,
            ],
            'zoom' => [
                'title' => 'timfoerster.leaflet::lang.component.zoom.title',
                'description' => 'timfoerster.leaflet::lang.component.zoom.description',
                'default' => 3,
                'type' => 'string',
                'required' => true,
            ],
            //Waiting for taglist support in components
            /*
            'objectDisplayList' => [
                'title'              => 'timfoerster.leaflet::lang.component.object_display_list.title',
                'description'       => 'timfoerster.leaflet::lang.component.zoom.description',
                'type'                => 'taglist',
                'separator'         => 'comma'
            ]
            */
        ];
    }

    public function getMapOptions()
    {
        return Maps::orderBy('name')->lists('name', 'id');
    }

    public function getShowOnlyObjectOptions()
    {

        $mapId = Request::input('map');
        if ($mapId == null) {
            $firstMap = Maps::orderBy('name')->first();
            if ($firstMap != null) {
                $mapId = $firstMap->id;
            }
        }

        $map = $this->mapQuery()->find($mapId);

        $objects = [trans("timfoerster.leaflet::lang.component.show_only_object.all")];

        if ($map) {
            $objects = array_replace_recursive($objects, $map->objects->lists('name', 'id'));
        }

        return $objects;
    }

    /*
     * Waiting for taglist support in components
    public function getObjectDisplayListOptions() {
        $map = $this->findMap();
        return $map->objects->list('name', 'id');
    }
    */

    public function onRun()
    {
        $this->page['map'] = $this->map();
        $this->addJs('/plugins/timfoerster/leaflet/assets/leaflet/leaflet.js');
        $this->addCss('/plugins/timfoerster/leaflet/assets/leaflet/leaflet.css');
    }

    public function map()
    {

        $map = $this->mapQuery()->find($this->property('map'));
        $map->fieldId = $this->property('fieldId');
        $map->latitude = $this->property('latitude');
        $map->longitude = $this->property('longitude');
        $map->zoom = $this->property('zoom');
        $map->height = $this->property('height');

        $showOnlyObject = $this->property('showOnlyObject');

        if ($showOnlyObject == null || $showOnlyObject == 0) {
            $map->objectsToDisplay = $map->objects;
        } else {
            $map->objectsToDisplay = $map->objects->filter(function ($object) use ($showOnlyObject) {
                return $showOnlyObject == $object->id;
            });
        }
        return $map;
    }

    protected function mapQuery()
    {
        return Maps::with('objects');
    }

}