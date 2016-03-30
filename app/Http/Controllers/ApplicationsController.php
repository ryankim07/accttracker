<?php namespace App\Http\Controllers;

/**
 * Class ApplicationsController
 *
 * Controller
 *
 * @author     Ryan Kim
 * @category   Mophie
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 mophie (https://at.nophie.us)
 */

use App\Http\Requests;

use App\Api\ApplicationsApi;

class ApplicationsController extends Controller
{
    /**
     * @var Applications Api
     */
    protected $applicationsApi;

    /**
     * PlansController constructor.
     */
    public function __construct(ApplicationsApi $applicationsApi)
    {
        $this->middleware('jwt.auth');

        $this->applicationsApi = $applicationsApi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function index($userId)
    {
        $apps = $this->applicationsApi->getAllApplications($userId);
        
        return $apps;
    }
}