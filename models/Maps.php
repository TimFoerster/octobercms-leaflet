<?php namespace TimFoerster\Leaflet\Models;

use Model;

/**
 * Model
 */
class Maps extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required'
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'timfoerster_leaflet_maps';

    public $hasMany = [
        'objects' => ['TimFoerster\Leaflet\Models\Objects'],
        'objects_count' => ['TimFoerster\Leaflet\Models\Objects', 'count' => true],
    ];

    public function objects() {
        return $this->hasMany('TimFoerster\Leaflet\Models\Objects');
    }

}
