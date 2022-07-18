<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VeiculoRequest;
use App\Models\Combustivel;
use App\Models\Cor;
use App\Models\Modelo;
use App\Models\Montadora;
use App\Models\Situacao;
use App\Models\TipoSituacao;
use App\Models\TipoVeiculo;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{

    protected $veiculo, $modelo, $situacao, $tipoVeiculo, $montadora, $combustivel, $cor;

    /**
     * @param $veiculo
     * @param $modelo
     * @param $situacao
     * @param $tipoVeiculo
     */
    public function __construct(Veiculo $veiculo, Modelo $modelo, Situacao $situacao, TipoVeiculo $tipoVeiculo, Montadora $montadora, Combustivel $combustivel, Cor $cor)
    {
        $this->veiculo = $veiculo;
        $this->modelo = $modelo;
        $this->situacao = $situacao;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->montadora = $montadora;
        $this->combustivel = $combustivel;
        $this->cor = $cor;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = $this->veiculo->paginate(20);
        return view('admin.paginas.veiculos.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $situacoes = $this->situacao->where('tipo_situacao_id', 2)->get();
        $tiposVeiculo = $this->tipoVeiculo->orderBy('tipo')->get();
        $montadoras = $this->montadora->orderBy('montadora')->get();
        $combustiveis = $this->combustivel->all();
        $cores = $this->cor->all();

        return view('admin.paginas.veiculos.create', compact('situacoes', 'tiposVeiculo', 'montadoras', 'combustiveis', 'cores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeiculoRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('foto') && $request->foto->isValid())
            $data['foto'] = $request->file('foto')->store('veiculo', 'public');

        $this->veiculo->create($data);

        toastr()->success('Veículo cadastrado com sucesso!', 'Sucesso');
        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$veiculo = $this->veiculo->where('uuid', $id)->first()){
            toastr()->error('Veículo não encontrado', 'Erro');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$veiculo = $this->veiculo->where('uuid', $id)->first()){
            toastr()->error('Veículo não encontrado', 'Erro');
            return redirect()->back();
        }

        $situacoes = $this->situacao->where('tipo_situacao_id', 2)->get();
        $tiposVeiculo = $this->tipoVeiculo->orderBy('tipo')->get();
        $montadoras = $this->montadora->orderBy('montadora')->get();
        $combustiveis = $this->combustivel->all();
        $cores = $this->cor->all();

        return view('admin.paginas.veiculos.edit', compact('situacoes', 'tiposVeiculo', 'montadoras', 'combustiveis', 'cores', 'veiculo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VeiculoRequest $request, $id)
    {
        if (!$veiculo = $this->veiculo->where('uuid', $id)->first()){
            toastr()->error('Veículo não encontrado', 'Erro');
            return redirect()->back();
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
        if (!$veiculo = $this->veiculo->where('uuid', $id)->first()){
            toastr()->error('Veículo não encontrado', 'Erro');
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {

    }
}
