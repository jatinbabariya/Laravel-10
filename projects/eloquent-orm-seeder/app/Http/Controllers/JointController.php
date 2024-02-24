<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class JointController extends Controller
{
    public function index()
    {
        return response()->json($this->getData(), 200, [], JSON_PRETTY_PRINT);
    }
    public function getData()
    {
        return User::select('users.u_name as name', 'users.u_contact as contact', 'users.u_email as email', 'users.u_password as password', 'addresses.add_address as address', 'cities.c_name as city')
            ->leftJoin('addresses', 'addresses.u_id', '=', 'users.u_id')
            ->leftJoin('cities', 'cities.c_id', '=', 'addresses.c_id')
            ->get();
    }
}
