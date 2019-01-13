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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Airline $airline)
    {
        $airlines = $this->airline->all();

        return view('panel.airlines.airlines', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.airlines.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airline = $this->airline->find($id);

        if(!$airline){
            return redirect()->back();
        }

        return view('panel.airlines.edit', compact('airline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
