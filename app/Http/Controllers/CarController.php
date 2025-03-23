<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest; // Importar el Form Request para crear
use App\Http\Requests\UpdateCarRequest; // Importar el Form Request para actualizar
use Illuminate\Http\Request;       

class CarController extends Controller
{
    // Obtener todos los coches
    public function index()
    {
        return Car::all();
    }

    // Crear un nuevo coche (usando StoreCarRequest para validación)
    public function store(StoreCarRequest $request)
    {
        // Crear el coche con los datos validados
        $car = Car::create($request->validated());
        return response()->json($car, 201); // Respuesta HTTP 201 (Created)
    }

    // Obtener un coche específico
    public function show($id)
    {
        return Car::findOrFail($id);
    }

    // Actualizar un coche (usando UpdateCarRequest para validación)
    public function update(UpdateCarRequest $request, $id)
    {
        // Buscar el coche por ID
        $car = Car::findOrFail($id);
        // Actualizar el coche con los datos validados
        $car->update($request->validated());
        return response()->json($car, 200); // Respuesta HTTP 200 (OK)
    }

    // Eliminar un coche
    public function destroy($id)
    {
        Car::destroy($id);
        return response()->json(null, 204); // Respuesta HTTP 204 (No Content)
    }
} 