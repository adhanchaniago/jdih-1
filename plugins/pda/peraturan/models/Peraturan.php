<?php namespace Pda\Peraturan\Models;

use Model;
use Pda\Peraturan\Models\Jenis;

/**
 * Model
 */
class Peraturan extends Model
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
    public $table = 'pda_peraturan_hukum';

    // public $attachOne = [
    //     'filename' => 'System\Models\File'
    // ];

    public $belongsTo = [
        'jenis' => [
            'Pda\Peraturan\Models\Jenis',
            //'order' => 'sator_id',
            'key' => 'jenis_id'
        ],
    ];

    public static $allowedSortingOptions = array(
        'tentang desc' => 'Tentang - desc',
        'tentang asc' => 'Tentang - asc',
        'tahun desc' => 'Tahun - desc',
        'tahun asc' => 'Tahun - asc'
    );

    public function scopeListFrontEnd($query, $options = []) {

        extract(array_merge([
            'page' => 1,
            'perPage' => 10,
            'sort' => 'tahun desc',
            'tentang' => '',
            'nomor' => '',
            'tahun' => '' 
        ], $options));

        if(!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {
            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);

                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }

                list($sortField, $sortDirection) = $parts;

                $query->orderBy($sortField, $sortDirection);
            }
        }

        $lastPage = $query->paginate($perPage, $page)->lastPage();

        if($lastPage < $page) {
            $page = 1;
        }

        if($tentang) {
            $query->where('tentang', 'like', '%'.$tentang.'%');
        }

        if($nomor) {
            $query->where('nomor', 'like', $nomor.'%');
        }

        if($tahun) {
            $query->where('tahun', '=', $tahun);
        }

        return $query->paginate($perPage, $page);
    }
}
