<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Report"]
        ];
        return view('report.index', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
