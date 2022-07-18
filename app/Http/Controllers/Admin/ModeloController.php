<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModeloRequest;
use App\Models\Modelo;
use App\Models\Montadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ModeloController extends Controller
{
    protected $modelo, $montadora;

    /**
     * @param $modelo
     */
    public function __construct(Modelo $modelo, Montadora $montadora)
    {
        $this->modelo = $modelo;
        $this->montadora = $montadora;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = $this->modelo->orderBy('montadora_id')->orderBy('modelo')->paginate(20);
        return view('admin.paginas.modelos.index', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $montadoras = $this->montadora->orderBy('montadora')->get();
        return view('admin.paginas.modelos.create', compact('montadoras'));
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(ModeloRequest $request)
    {
        $this->modelo->create($request->all());

        toastr()->success('Modelo cadastrado com sucesso', 'Sucesso');
        return redirect()->route('modelos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$modelo = $this->modelo->where('uuid', $id)->first()){
            toastr()->error('Modelo não encontrado', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.modelos.show', compact('modelo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$modelo = $this->modelo->where('uuid', $id)->first()){
            toastr()->error('Modelo não encontrado', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.modelos.edit', compact('modelo'));
    }

    /**
     * Update the specified resource in storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModeloRequest $request, $id)
    {
        if (!$modelo = $this->modelo->where('uuid', $id)->first()){
            toastr()->error('Modelo não encontrado', 'Erro');
            return redirect()->back();
        }

        $modelo->update($request->all());
        toastr()->success('Modelo atualizado com sucesso', 'Sucesso');
        return redirect()->route('modelos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$modelo = $this->modelo->where('uuid', $id)->first()){
            toastr()->error('Modelo não encontrado', 'Erro');
            return redirect()->back();
        }

        $modelo->delete();
        toastr()->success('Modelo excluído com sucesso', 'Sucesso');
        return redirect()->route('modelos.index');

    }

    public function busca(Request $request)
    {
        $filtros = $request->only('busca');
        $modelos = $this->modelo->where(function ($query) use ($request){
            if ($request->busca){
                $busca = strtoupper($request->busca);
                $query->where('modelo', 'LIKE', "%{$busca}%")
                    ->orWhere('descricao', 'LIKE', "%{$busca}%");
            }
        })
            ->orderBy('modelo')
            ->paginate();

        return view('admin.paginas.modelos.index', compact('modelos', 'filtros'));
    }

    public function listModelos(Request $request)
    {
        $modelos = $this->modelo->where('montadora_id', $request->marca)->orderBy('modelo')->get();

        return Response::json($modelos);
    }

}
