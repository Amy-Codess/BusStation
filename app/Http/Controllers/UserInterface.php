<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityTrans;


class UserInterface extends Controller
{
    public function ShowUIPage(Request $request)
    {
        return view('userinterface.index');
    }
    public function Citiestransport()
    {
        $bus=CityTrans::All();
        return view('userinterface.citytrans', ['bus' => $bus]);
    }
    public function reserveBus(Request $request)
{
    $request->validate([
        'id' => 'required',
    ]);

    return response()->json(['message' => 'Bus reserved successfully!'], 200);
}

public function search(Request $request)
{
    // Validate the selected bus ID
    $request->validate([
        'id' => 'required',
    ]);

    // Retrieve the selected bus details
    $selectedBus = CityTrans::findOrFail($request->id);

    // Pass the bus data to the view
    return view('userinterface.citytrans', ['CityTrans' => $selectedBus])
        ->with('success', 'تم الحجز بنجاح!');
}



}
