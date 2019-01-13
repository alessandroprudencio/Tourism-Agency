<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Http\Requests\AirlineStoreUpdateFormRequest;

class AirlineController extends Controller
{
    private $airline;

    public function __construct(Airline $airline)
   {
       $this->airline = $airline;
   }

    public function index(Airline $airline)
    {
        $airlines = $this->airline->all();

        return view('panel.airlines.airlines', compact('airlines'));
    }

 
    public function create()
    {
        return view('panel.airlines.create');
        
    }

    public function store(AirlineStoreUpdateFormRequest $request)
    {
        $dataForm = $request->all();
        //$insert = Airline::create($dataForm);

        if($insert =$this->airline->create($dataForm)){
           return redirect()->route('linhas_aereas.index')->with('success','Cadastro efetuado com  sucesso!');;
        }else{
            return redirect()->back()->with('error','Erro ao cadastrar linha aérea!');
        }

    }


    public function show($id)
    {
        $airline = $this->airline->find($id);

        if(!$airline){
            return redirect()->back();
        }

        return view('panel.airlines.show', compact('airline'));
    }


    public function edit($id)
    {
        $airline = $this->airline->find($id);

        if(!$airline){
            return redirect()->back();
        }

        return view('panel.airlines.edit', compact('airline'));
    }

    public function update(AirlineStoreUpdateFormRequest $request, $id)
    {
        $airline = $this->airline->find($id);

        if(!$airline){
            return redirect()->back();
        }
        $update =  $airline->update($request->all());

        if($update){
            return redirect()->route('linhas_aereas.index')->with('success','Atualizado com  sucesso!');;
         }else{
             return redirect()->back()->with('error','Erro ao atualizar linha aérea!');
         }
 
    }

    public function destroy($id)
    {
        $airline = $this->airline->find($id);

        if(!$airline){
            return redirect()->back();
        }

       if($airline->delete()){
            return redirect()->route('linhas_aereas.index')->with('success','Excluido com  sucesso!');;
       }else{
        return redirect()->back()->with('error','Erro ao atualizar linha aérea!');
    }
    }
}
