<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventBantuan;

class EventBantuanController extends Controller
{
    public function index()
    {
        $events = EventBantuan::all(); // atau latest()

        return view('admin.event-bantuan.index', compact('events'));
    }
}