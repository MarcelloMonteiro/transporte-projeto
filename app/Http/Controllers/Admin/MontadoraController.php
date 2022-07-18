<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MontadoraRequest;
use App\Models\Montadora;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MontadoraController extends Controller
{
    use UploadTrait;

    protected $montadora;

    /**
     * @param $montadora
     */
    public function __construct(Montadora $montadora)
    {
        $this->montadora = $montadora;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $montadoras = $this->montadora->orderBy('montadora')->paginate(20);
        return view('admin.paginas.montadoras.index', compact('montadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paginas.montadoras.create');
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(MontadoraRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('logo') && $request->logo->isValid())
            $data['logo'] = $this->imageUpload($request->file('logo'), null, 'montadoras');

        $this->montadora->create($data);

        toastr()->success('Montadora cadastrada com sucesso!', 'Sucesso');
        return redirect()->route('montadoras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$montadora = $this->montadora->where('uuid', $id)->first()){
            toastr()->error('Montadora não encontrada', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.montadoras.show', compact('montadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$montadora = $this->montadora->where('uuid', $id)->first()){
            toastr()->error('Montadora não encontrada', 'Erro');
            return redirect()->back();
        }

        return view('admin.paginas.montadoras.edit', compact('montadora'));
    }

    /**
     * Update the specified resource in storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MontadoraRequest $request, $id)
    {
        if (!$montadora = $this->montadora->where('uuid', $id)->first()){
            toastr()->error('Montadora não encontrada', 'Erro');
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->hasFile('logo') && $request->logo->isValid()){
            if (Storage::disk('public')->exists($montadora->logo))
                Storage::disk('public')->delete($montadora->logo);

            $data['logo'] = $this->imageUpload($request->file('logo'), null, 'montadoras');
        }

        $montadora->update($data);

        toastr()->success('Montadora alterada com sucesso', 'Sucesso');
        return redirect()->route('montadoras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$montadora = $this->montadora->where('uuid', $id)->first()){
            toastr()->error('Montadora não encontrada', 'Erro');
            return redirect()->back();
        }

        if (Storage::disk('public')->exists($montadora->logo))
            Storage::disk('public')->delete($montadora->logo);

        $montadora->delete();

        toastr()->success('Montadora excluída com sucesso', 'Sucesso');
        return redirect()->route('montadoras.index');

    }

    public function busca(Request $request)
    {
        $filtros = $request->only('busca');
        $montadoras = $this->montadora->where(function ($query) use ($request){
            if ($request->busca){
                $busca = strtoupper($request->busca);
                $query->where('montadora', 'LIKE', "%{$busca}%")
                    ->orWhere('descricao', 'LIKE', "%{$busca}%");
            }
        })
            ->orderBy('montadora')
            ->paginate();

        return view('admin.paginas.montadoras.index', compact('montadoras', 'filtros'));
    }
}
