<?php namespace Ugi\Akikahkita\Models;

use Model;

/**
 * Model
 */
class Paket extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ugi_akikahkita_paket';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
