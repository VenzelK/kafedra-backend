<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        return response()->json($request, 200);
    }
}
