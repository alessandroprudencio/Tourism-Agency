<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plane;
use App\Models\Airline;
use App\Http\Requests\PlaneStoreUpdateFormRequest;

class PlaneController extends Controller
{

    private $plane;

    public function __construct(Plane $plane)
    {
       $this->plane = $plane;
    }


    public function index()
    {
        $planes = $this->plane->with('airline')->get();

        return view('panel.planes.planes', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airlines = Airline::pluck('name','id');

        $classes = $this->plane->classes();

        return view('panel.planes.create', compact('airlines', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaneStoreUpdateFormRequest $request)
    {
        $dataForm = $request->all();


        if($insert =$this->plane->create($dataForm)){
           return redirect()->route('avioes.index')->with('success','Cadastro efetuado com  sucesso!');;
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
        $plane = $this->plane->with('airline')->find($id);
        if(!$plane)
            return redirect()->back();  
            $classes = $this->plane->classes();

        return view('panel.planes.show', compact('plane','classes'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plane = $this->plane->find($id);
    
        
        if(!$plane)
            return redirect()->back();  

            $airlines = Airline::pluck('name','id');

            $classes = $this->plane->classes();

        return view('panel.planes.edit', compact('plane','classes','airlines'));
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
        $plane = $this->plane->find($id);
        if(!$plane)
            return redirect()->back();

        $update  = $plane->update($request->all());

        if($update){
            return redirect()->route('avioes.index')->with('success','Atualizado com  sucesso!');;
         }else{
             return redirect()->back()->with('error','Erro ao atualizar avião!');
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
        $plane = $this->plane->find($id);
     
        if(!$plane)
            return redirect()->back();  

        if($plane->delete()){
                return redirect()->route('avioes.index')->with('success','Excluido com  sucesso!');
             }else{
                 return redirect()->back()->with('error','Erro ao excluir avião!');
             }
    
    }


}
