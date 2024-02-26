<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotificationEvent;

class EventController extends Controller
{
    public function index()
    {
        event(new NotificationEvent([
            'message' => 'New notification!',
        ]));

        return response()->json(['message' => 'Notification triggered']);
    }
}
