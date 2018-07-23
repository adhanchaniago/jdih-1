<?php namespace Pda\Peraturan\Models;

use Model;

/**
 * Model
 */
class Berita extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pda_peraturan_berita';

    public $attachOne = [
        'gambar' => 'System\Models\File'
    ];
}