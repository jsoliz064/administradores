<?php

namespace App\Http\Livewire;

use App\Models\Grupo;
use App\Models\Materia;
use App\Models\Carrera;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Grupos extends Component
{
    use WithPagination;

    public $docente,$admin1,$admin2,$grupo,$grupo_id,$materia_nombre,$materia_id;

    public $search = "";
    public $cant=5;
    public $open = false;
    public $open2 = false;

    protected $listeners = ['render', 'search' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function limpiarCampos()
    {
        $this->docente = "";
        $this->materia_id = "";
        $this->grupo_id="";
        $this->admin1="";
        $this->admin2="";
        $this->grupo="";

    }
    public function eliminar($grupo_id)
    {
        Grupo::find($grupo_id)->delete();
    }

    public function render()
    {
        /* $grupos = Grupo::where('grupo', 'like', '%' . $this->search . '%')
            ->orWhere('admin1', 'like', '%' . $this->search . '%')
            ->simplePaginate($this->cant); */
        $grupos = DB::table('grupos')
                    ->join('materias', 'materias.id', '=', 'grupos.materia_id')
                    ->select('grupos.id','materias.nombre','materias.sigla','grupos.grupo','grupos.admin1','grupos.admin2','grupos.docente','grupos.materia_id')
                    ->where('nombre', 'like', '%' . $this->search . '%')
                    ->orWhere('sigla', 'like', '%' . $this->search . '%')
                    ->simplePaginate($this->cant);
        $materias=Materia::all();

        return view('livewire.grupo', compact('grupos','materias'));
    }
    public function guardar()
    {
        $grupo=Grupo::create([
            'grupo' => $this->grupo,
            'admin1' => $this->admin1,
            'admin2' => $this->admin2,
            'docente' => $this->docente,
            'materia_id' => $this->materia_id,
        ]);

        $this->limpiarCampos();
    }
    public function edit($id)
    {
        $this->open2 = true;
        $this->grupo_id = $id;
        $grupo = Grupo::find($id);
        $this->materia_nombre=$grupo->materia->nombre;
        $this->materia_id=$grupo->materia->id;
        $this->grupo = $grupo->grupo;
        $this->admin1 = $grupo->admin1;
        $this->admin2 = $grupo->admin2;
        $this->docente = $grupo->docente;
    }
    public function cancelar()
    {
        $this->open2 = false;
        $this->open = false;
        $this->limpiarCampos();
    }

    public function update()
    {
        $grupo = Grupo::find($this->grupo_id);
        $grupo->update([
            'grupo' => $this->grupo,
            'admin1' => $this->admin1,
            'admin2' => $this->admin2,
            'docente' => $this->docente,
            'materia_id' => $this->materia_id,
        ]);

        $this->limpiarCampos();
        $this->open2 = false;
    }
}
