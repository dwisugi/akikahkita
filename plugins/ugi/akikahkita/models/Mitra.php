<?php namespace Ugi\Akikahkita\Models;

use Model;

/**
 * Model
 */
class Mitra extends Model 
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ugi_akikahkita_mitra';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'fotoProfil'  => 'System\Models\File',
        'fotoKantor'  => 'System\Models\File',
        'fotoDapur'   => 'System\Models\File',
        'fotoKandang' => 'System\Models\File'
    ];

}
