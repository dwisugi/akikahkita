<?php namespace Ugi\Akikahkita\Models;

use Model;

/**
 * Model
 */
class Brosur extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ugi_akikahkita_brosur';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
        'fotoBrosur'  => 'System\Models\File'
    ];
}
