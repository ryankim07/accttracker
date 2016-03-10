<?php namespace App\Models;

/**
 * Class Employees
 *
 * Model
 *
 * @author     Ryan Kim
 * @category   Mophie
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 mophie (https://at.nophie.us)
 */

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "employees";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'url'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = array('id');
}