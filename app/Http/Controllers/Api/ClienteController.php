<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clientes = Cliente::all();

        return ClienteResource::collection($clientes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = Cliente::create($request->validated());

        return ClienteResource::make($cliente);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        return ClienteResource::make($cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return ClienteResource::make($cliente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->noContent();
    }
}
