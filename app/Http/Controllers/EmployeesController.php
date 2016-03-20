<?php namespace App\Http\Controllers;

/**
 * Class EmployeesController
 *
 * Controller
 *
 * @author     Ryan Kim
 * @category   Mophie
 * @package    Account Tracker
 * @copyright  Copyright (c) 2016 mophie (https://at.nophie.us)
 */

use App\Http\Requests;

use App\Models\Employees;

class EmployeesController extends Controller
{
    /**
     * EmployeesController constructor.
     */
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function index()
    {
        $employees = Employees::all();

        return $employees;
    }
}