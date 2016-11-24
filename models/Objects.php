<?php namespace TimFoerster\Leaflet\Models;

use Model;

/**
 * Model
 */
class Objects extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name','popup'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'timfoerster_leaflet_objects';

    /*
    public $belongsTo = [
        'map' => ['TimFoerster\Leaflet\Models\Maps'],
    ];
    */

}