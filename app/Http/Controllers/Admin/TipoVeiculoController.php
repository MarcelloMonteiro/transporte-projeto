<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoVeiculoRequest;
use App\Models\TipoVeiculo;
use Illuminate\Http\Request;

class TipoVeiculoController extends Controller
{

    protected $tipo;

    /**
     * @param $tipo
     */
    public function __construct(TipoVeiculo $tipo)
    {
        $this->tipo = $tipo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = $this->tipo->orderBy('tipo')->get();
        return view('admin.paginas.tipos-veiculos.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.tipos-veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(TipoVeiculoRequest $request)
    {
        $this->tipo->create($request->all());

        toastr()->success('Tipo de veículo cadastrado com sucesso', 'Sucesso');
        return redirect()->route('tipos-veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$tipo = $this->tipo->where('uuid', $id)->first()){
            toastr()->error('Tipo de veículo não encontrado', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.tipos-veiculos.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$tipo = $this->tipo->where('uuid', $id)->first()){
            toastr()->error('Tipo de veículo não encontrado', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.tipos-veiculos.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoVeiculoRequest $request, $id)
    {
        if (!$tipo = $this->tipo->where('uuid', $id)->first()){
            toastr()->error('Tipo de veículo não encontrado', 'Erro');
            return redirect()->back();
        }

        $tipo->update($request->all());

        toastr()->success('Tipo de veículo alterado com sucesso', 'Sucesso');
        return redirect()->route('tipos-veiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$tipo = $this->tipo->where('uuid', $id)->first()){
            toastr()->error('Tipo de veículo não encontrado', 'Erro');
            return redirect()->back();
        }

        $tipo->delete();

        toastr()->success('Tipo de veículo excluído com sucesso', 'Sucesso');
        return redirect()->route('tipos-veiculos.index');
    }
}
