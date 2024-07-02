<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AnalyticController extends Controller
{
    public function index()
    {
        return view('admin.analytics.index');
    }
}
