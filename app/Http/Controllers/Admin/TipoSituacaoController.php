<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoSituacaoRequest;
use App\Models\TipoSituacao;
use Illuminate\Http\Request;

class TipoSituacaoController extends Controller
{

    protected $tipo;

    /**
     * @param $tipo
     */
    public function __construct(TipoSituacao $tipo)
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
        $tipos = $this->tipo->orderBy('tipo')->paginate();
        return view('admin.paginas.tipos-situacoes.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.tipos-situacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoSituacaoRequest $request)
    {
        $this->tipo->create($request->all());

        toastr()->success('Tipo de situação cadastrada com sucesso', 'Sucesso');
        return redirect()->route('tipos-situacao.index');
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
            toastr()->error('Tipo de situação não encontrada');
            return redirect()->back();
        }

        return view('admin.paginas.tipos-situacoes.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$tipo = $this->tipo->where('uuid', $id)->first()){
            toastr()->error('Tipo de situação não encontrada');
            return redirect()->back();
        }

        return view('admin.paginas.tipos-situacoes.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoSituacaoRequest $request, $id)
    {
        if (!$tipo = $this->tipo->where('uuid', $id)->first()){
            toastr()->error('Tipo de situação não encontrada');
            return redirect()->back();
        }

        $tipo->update($request->all());

        toastr()->success('Tipo de situação alterada com sucesso', 'Sucesso');
        return redirect()->route('tipos-situacao.index');
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
            toastr()->error('Tipo de situação não encontrada');
            return redirect()->back();
        }

        $tipo->delete();

        toastr()->success('Tipo de situação excluída com sucesso', 'Sucesso');
        return redirect()->route('tipos-situacao.index');
    }
}
