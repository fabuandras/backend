<?php

namespace App\Http\Controllers;

use App\Models\Tanuloszobak;
use App\Models\Szobatipusok;
use Illuminate\Http\Request;

class TanuloszobakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Szobatipus::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanuloszobak $tanuloszobak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanuloszobak $tanuloszobak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanuloszobak $tanuloszobak)
    {
        $szoba = Tanuloszoba::find($id);
        if (!$szoba) {
            return response()->json(['message' => 'Nem található a szoba!'], 404);
        }

        if ($szoba->foglalt_helyek < $szoba_ferohely) {
            $szoba->foglalt_helyek += 1;
            $szoba->save();
        }

        return response()->json(['message' => 'Sikeres foglalás!', 'data' => $szoba]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanuloszobak $tanuloszobak)
    {
        Tanuloszoba::destroy($id);
        return response()->json(['message' => 'Sikeres törlés!']);
    }
}
