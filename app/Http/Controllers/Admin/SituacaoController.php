<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SituacaoRequest;
use App\Models\Situacao;
use App\Models\TipoSituacao;
use Illuminate\Http\Request;

class SituacaoController extends Controller
{

    protected $situacao, $tiposSituacao;

    /**
     * @param $situacao
     */
    public function __construct(Situacao $situacao, TipoSituacao $tipoSituacao)
    {
        $this->situacao = $situacao;
        $this->tiposSituacao = $tipoSituacao;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situacoes = $this->situacao->orderBy('situacao')->orderBy('tipo_situacao_id')->paginate(20);
        return view('admin.paginas.situacoes.index', compact('situacoes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = $this->tiposSituacao->orderBy('tipo')->get();
        return view('admin.paginas.situacoes.create', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SituacaoRequest $request)
    {
        $this->situacao->create($request->all());

        toastr()->success('Situação cadastrada com sucesso', 'Sucesso');
        return redirect()->route('situacoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$situacao = $this->situacao->where('uuid', $id)->first()){
            toastr()->error('Situação não encontrada');
            return redirect()->back();
        }

        return view('admin.paginas.situacoes.show', compact('situacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$situacao = $this->situacao->where('uuid', $id)->first()){
            toastr()->error('Situação não encontrada');
            return redirect()->back();
        }

        $tipos = $this->tiposSituacao->orderBy('tipo')->get();

        return view('admin.paginas.situacoes.edit', compact('situacao', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SituacaoRequest $request, $id)
    {
        if (!$situacao = $this->situacao->where('uuid', $id)->first()){
            toastr()->error('Situação não encontrada');
            return redirect()->back();
        }

        $situacao->update($request->all());

        toastr()->success('Situação alterada com sucesso', 'Sucesso');
        return redirect()->route('situacoes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$situacao = $this->situacao->where('uuid', $id)->first()){
            toastr()->error('Situação não encontrada');
            return redirect()->back();
        }

        $situacao->delete();

        toastr()->success('Situação excluída com sucesso', 'Sucesso');
        return redirect()->route('situacoes.index');
    }
}
