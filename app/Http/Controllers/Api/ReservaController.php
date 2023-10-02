<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Http\Resources\ReservaResource;
use App\Models\Reserva;
use Illuminate\Http\Response;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::all();

        return ReservaResource::collection($reservas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservaRequest $request)
    {
        $reserva = Reserva::create($request->validated());

        return ReservaResource::make($reserva);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $reserva = Reserva::find($id);

        if (!$reserva) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        return ReservaResource::make($reserva);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaRequest $request, int $id)
    {
        $reserva = Reserva::find($id);

        if (!$reserva) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $reserva->update($request->validated());

        return ReservaResource::make($reserva);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $reserva = Reserva::find($id);

        if (!$reserva) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $reserva->delete();

        return response()->noContent();
    }
}
