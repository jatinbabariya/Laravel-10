<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrmComtroller extends Controller
{
    public function index()
    {
        return response()->json($this->getData(), 200, [], JSON_PRETTY_PRINT);
    }
    public function getData()
    {
        return User::with(['addresses', 'addresses.city'])
            ->get();
    }
}
