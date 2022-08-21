<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    // Calender App
    public function calendarApp()
    {
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('apps.calendar.index', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    // ToDo App
    public function todoApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'todo-application',
        ];

        return view('apps.todo.index', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    // File manager App
    public function file_manager()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'file-manager-application',
        ];

        return view('apps.filemanager.index', ['pageConfigs' => $pageConfigs]);
    }

    // Kanban App
    public function kanbanApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'pageClass' => 'kanban-application',
        ];

        return view('apps.kanban.index', ['pageConfigs' => $pageConfigs]);
    }
}
