<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTelefoneRequest;
use App\Http\Requests\UpdateTelefoneRequest;
use App\Http\Resources\ClienteResource;
use App\Http\Resources\TelefoneResource;
use App\Models\Telefone;
use Illuminate\Http\Response;

class TelefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $telefones = Telefone::all();

        return TelefoneResource::collection($telefones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTelefoneRequest $request)
    {
        
        $telefone = Telefone::create($request->validated());

        return TelefoneResource::make($telefone);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        
        $telefone = Telefone::Find($id);

        if (!$telefone) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        return TelefoneResource::make($telefone);


    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTelefoneRequest $request, int $id)
    {
        $telefone = Telefone::find($id);

        if (!$telefone) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $telefone->update($request->validated());

        return TelefoneResource::make($telefone);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $telefone = Telefone::find($id);

        if (!$telefone) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $telefone->delete();

        return response()->noContent();
    }
}
