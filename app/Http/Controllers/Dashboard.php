<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityTrans;

class Dashboard extends Controller
{
    public function ShowDashboardPage(Request $request)
    {
        return view('dashboard.index');
    }

    public function CityTrans()
    {
        $bus=CityTrans::All();
        return view('dashboard.citytrans', ['bus' => $bus]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'bus_number' => 'required',
            'arrival_time' => 'required',
            'departure_time' => 'required',
            'date' => 'required',
            'gathering_point' => 'required',
            'destination_from' => 'required',
            'destination_to' => 'required',
        ]);
    
        $bus= CityTrans::create(
            [
            'company_name' => $request-> company_name,
            'bus_number' => $request-> bus_number,
            'arrival_time' => $request->arrival_time,
            'departure_time' => $request-> departure_time,
            'date' => $request-> date,
            'gathering_point' => $request-> gathering_point,
            'destination_from' => $request->destination_from,
            'destination_to' => $request->destination_to,


            ]);
            $bus->save();

            return redirect()->route('CityTrans');
    }
    public function edit($id)
{
    $bus = CityTrans::findOrFail($id);
    return response()->json($bus);
}


    public function destroy($id)
       {
    $bus = CityTrans::findOrFail($id);
    $bus->delete();

    return redirect()->route('CityTrans')->with('success', 'Record deleted successfully!');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'company_name' => 'required',
        'bus_number' => 'required',
        'arrival_time' => 'required',
        'departure_time' => 'required',
        'date' => 'required',
        'gathering_point' => 'required',
        'destination_from' => 'required',
        'destination_to' => 'required',
    ]);

    $bus = CityTrans::findOrFail($id);
    $bus->update($request->all());

    return redirect()->route('CityTrans')->with('success', 'Record updated successfully!');
}


    public function UniTrans()
    {
        return view('dashboard.unitrans');
    }

    public function SchoolTrans()
    {
        return view('dashboard.schooltrans');
    }

    public function TeachersTrans()
    {
        return view('dashboard.teacherstrans');
    }
    




}
