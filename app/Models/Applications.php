<?php namespace App\Models;

/**
 * Class Applications
 *
 * Model
 *
 * @author     Ryan Kim
 * @category   AT
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 Ryan's Tools (https://ryanstools.com)
 */

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'url'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = array('id');

    public function account()
    {
        return $this->belongsTo('App\Models\Accounts');
    }
}