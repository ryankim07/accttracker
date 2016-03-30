<?php namespace App\Http\Controllers;

/**
 * Class AccountsController
 *
 * Controller
 *
 * @author     Ryan Kim
 * @category   Mophie
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 mophie (https://at.nophie.us)
 */

use App\Http\Requests;

use App\Api\AccountsApi;

class AccountsController extends Controller
{
    /**
     * @var Accounts Api
     */
    protected $accountsApi;

    /**
     * AccountsController constructor.
     */
    public function __construct(AccountsApi $accountsApi)
    {
        $this->middleware('jwt.auth');

        $this->accountsApi = $accountsApi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function index($userId)
    {
        $apps = $this->accountsApi->getAllAccounts($userId);
        
        return $apps;
    }
}