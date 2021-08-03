<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnderecoController extends Controller
{
    public function create(){
        if(!Auth::check()){
            return view('dashboard');
        }
        return view('endereco.create');
    }

    public function store(Request $request){

      
         $id = Auth::getUser()->id;


        Address::create([
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'id_usuario'=>$id
        ]);
    
    
        $addresses = Address::get();

        return view('dashboard', compact('addresses'));
    }

    public function show()
    {
        if(!Auth::check()){
            return view('dashboard');
        }
        $endereco = Address::get();
        return view('endereco.show', compact('endereco'));
    }
    public function destroy($id)
    {
        
        if(!Auth::check()){
            return view('dashboard');
        }

        Address::findOrFail($id)->delete();

        return redirect('/endereco/ver');

        
    }

}
