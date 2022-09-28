<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use Flasher\Laravel\Facade\Flasher;

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

        if (count($route) > 0)
            return response()->json(['message' => 1]);

        Route::create($formFields);

        Flasher::addSuccess("Route added successfully");

        return response()->json([
            'message' => 2,
            'routes' => Route::all()
        ]);
    }

    public function edit(Request $request)
    {
        $formFields = $request->validate([
            'new_cost' => 'required',
            'route' => 'required',
        ]);

        $route = Route::find($formFields['route']);
        $route->cost = $formFields['new_cost'];
        $route->save();

        return response()->json([
            'message' => 1,
            'routes' => Route::all()
        ]);
    }
}
