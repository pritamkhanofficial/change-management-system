<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
}