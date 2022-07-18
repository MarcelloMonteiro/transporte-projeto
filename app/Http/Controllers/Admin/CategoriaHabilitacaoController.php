<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaHabilitacaoRequest;
use App\Models\CategoriaHabilitacao;
use Illuminate\Http\Request;

class CategoriaHabilitacaoController extends Controller
{

    protected $categoria;

    /**
     * @param $categoria
     */
    public function __construct(CategoriaHabilitacao $categoria)
    {
        $this->categoria = $categoria;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = $this->categoria->orderBy('categoria')->get();
        return view('admin.paginas.categorias-habilitacao.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.categorias-habilitacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaHabilitacaoRequest $request)
    {
        $this->categoria->create($request->all());

        toastr()->success('Categoria cadastrada com sucesso!', 'Sucesso');
        return redirect()->route('categorias-habilitacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$categoria = $this->categoria->where('uuid', $id)->first()){
            toastr()->error('Categoria não encontrada', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.categorias-habilitacao.show', compact('categoria'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$categoria = $this->categoria->where('uuid', $id)->first()){
            toastr()->error('Categoria não encontrada', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.categorias-habilitacao.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaHabilitacaoRequest $request, $id)
    {
        if (!$categoria = $this->categoria->where('uuid', $id)->first()){
            toastr()->error('Categoria não encontrada', 'Erro');
            return redirect()->back();
        }

        $categoria->update($request->all());

        toastr()->success('Categoria alterada com sucesso', 'Sucesso');
        return redirect()->route('categorias-habilitacao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$categoria = $this->categoria->where('uuid', $id)->first()){
            toastr()->error('Categoria não encontrada', 'Erro');
            return redirect()->back();
        }

        $categoria->delete();

        toastr()->success('Categoria excluída com sucesso', 'Sucesso');
        return redirect()->route('categorias-habilitacao.index');

    }
}
