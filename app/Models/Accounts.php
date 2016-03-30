<?php namespace App\Models;

/**
 * Class Accounts
 *
 * Model
 *
 * @author     Ryan Kim
 * @category   AT
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 Ryan's Tools (https://ryanstools.com)
 */

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'app_id',
        'username',
        'password'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = array('id');

    /**
     * Belongs to one user
     * 
     * @return mixed
     */
    public function user()
    {
        return $this->belonsTo('App\Models\Users');
    }

    /**
     * Belongs to one application
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function application()
    {
        return $this->hasOne('App\Models\Applications');
    }
}