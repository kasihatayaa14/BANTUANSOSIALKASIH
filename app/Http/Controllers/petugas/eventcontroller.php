<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\EventBantuan;

class EventController extends Controller
{
    public function index()
    {
        $events = EventBantuan::all();

        return view('petugas.event.index', compact('events'));
    }
}