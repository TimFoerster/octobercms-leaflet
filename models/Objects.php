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
        'name' => 'required',
        'type' => 'in:marker,circle,polygon',
        'position' => 'required',
    ];

    public function beforeValidate()
    {
        if(!$this->type) {
            $this->rules['type'] = 'required';
            return;
        }

        $regExNumber = '[-+]?[0-9]*\.?[0-9]+';
        $latLang = $regExNumber.', ?'.$regExNumber;

        switch ($this->type) {
            case 'marker' :
            case 'circle' :
                $this->rules['position'] = 'regex:/^('.$latLang.')$/';
                break;
            case 'polygon' :
                $this->rules['position'] = 'regex:/^(\['.$latLang.'\])(, ?\['.$latLang.'\])*$/';
                break;
        }
    }

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'timfoerster_leaflet_objects';

}