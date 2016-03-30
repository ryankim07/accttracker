<?php namespace App\Api;

/**
 * Class AccountsApi
 *
 * API
 *
 * @author     Ryan Kim
 * @category   Mophie
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 mophie (https://at.nophie.us)
 */

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use PhpSpec\Exception\Exception;

use App\Models\Accounts;

class AccountsApi
{
    /**
     * @var Accounts
     */
    protected $model;

    /**
     * Accounts constructor.
     *
     * @param Accounts $accounts
     */
    public function __construct(Accounts $accounts)
    {
        $this->model = $accounts;
    }

    /**
     * Get all accounts.
     *
     * @param $userId
     * @return mixed
     */
    public function getAllAccounts($userId)
    {
        $results = DB::table('accounts AS acct')
            ->join('applications AS app', 'app.id', '=', 'acct.app_id')
            ->join('categories AS cat', 'cat.id', '=', 'app.cat_id')
            ->select('app.name', 'app.url', 'cat.name AS category', 'acct.username', 'acct.password', 'acct.notes')
            ->where('acct.user_id', '=', $userId)
            ->get();

        return $results;
    }
}