<?php namespace Pda\LayananAdvokasi\Models;

use Model;

/**
 * Model
 */
class Status extends Model
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
    public $table = 'pda_layananadvokasi_status';
}
