<?php namespace Pda\LayananAdvokasi\Models;

use Model;

/**
 * Model
 */
class Question extends Model
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
    public $table = 'pda_layananadvokasi_questions';

    public $belongsTo = [
        'category' => [
            'Pda\LayananAdvokasi\Models\Category',
            'key' => 'category_id'
        ],
        'status' => [
            'Pda\LayananAdvokasi\Models\Status',
            'key' => 'status_id'
        ],
        'user' => [
            'Rainlab\User\Models\User',
            'key' => 'user_id'
        ]
    ];

    public $attachOne = [
        'files' => 'System\Models\File'
    ];
}
