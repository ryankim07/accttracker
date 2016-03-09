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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
use Session;

class ApplicationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function index()
    {
        return Response::json(Applications::get());
    }
}