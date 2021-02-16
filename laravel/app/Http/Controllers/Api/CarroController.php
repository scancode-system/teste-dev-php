<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    
    public function index(){
        return Carro::all();
    }

    public function store(Request $request){
        $carro = Carro::create($request->all());
        return $carro;
    }

    public function edit(Request $request, $id){
        return Carro::find($id);
    }

    public function update(Request $request, $id){
        $carro = Carro::find($id);
        $carro->update($request->all());
        return $carro;
    }

    public function delete(Request $request, $id){
        $carro = Carro::find($id);
        $carro->delete();
        return 'Carro deletado com sucesso';
    }

}
