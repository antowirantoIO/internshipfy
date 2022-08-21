<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductivityController extends Controller
{
    public function whiteboard()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "Whiteboard"]
        ];
        return view('productivity.whiteboard', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function skyoffice()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "SkyOffice"]
        ];
        return view('productivity.skyoffice', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function pomofocus()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "PomoFocus"]
        ];
        return view('productivity.pomofocus', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function lifeat()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "LifeAt"]
        ];
        return view('productivity.lifeat', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function moodly()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "Moodly"]
        ];
        return view('productivity.moodly', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function poolsuite()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "PoolSuite"]
        ];
        return view('productivity.poolsuite', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function shhhnoise()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Productivity"], ['name' => "ShhhNoise"]
        ];
        return view('productivity.shhhnoise', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
