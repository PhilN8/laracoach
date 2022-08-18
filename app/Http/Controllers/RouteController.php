<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    public function create(Request $request)
    {
        $formFields = $request->validate([
            'departure' => 'required',
            'destination' => 'required',
            'cost' => 'required'
        ]);

        $route = Route::where('departure', $formFields['departure'])
            ->where('destination', $formFields['destination'])
            ->get();

        if (count($route) != 0)
            return response()->json(['message' => 1]);

        Route::create($formFields);

        return response()->json([
            'message' => 2,
            'routes' => Route::all()
        ]);
    }
}
