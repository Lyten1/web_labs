<?php namespace Vasya\Lab18\Models;

use Model;

/**
 * Model
 */
class Table extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vasya_lab18_table';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
