<?php namespace TimFoerster\Leaflet\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Maps extends Controller
{

    public $requiredPermissions = ['timfoerster.leaflet.maps'];

    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('TimFoerster.Leaflet', 'main-menu-item');
    }


}