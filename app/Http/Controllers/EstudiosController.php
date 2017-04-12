<?php
//autor: Enelvillafranca
//web: www.syscode.com.ve
namespace App\Http\Controllers;
use App\Estudios;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEstudioRequest;
use App\Http\Requests\UpdateEstudioRequest;

class EstudiosController extends Controller
{
    public function index()
    {
    /* listar todos  $estudios = Estudios::all();*/
    /* listar del ultimo registro al primero  $estudios = Estudios::orderBy('id','desc')->get();*/
    /*listar del mas reciente al mas antiguo $estudios = Estudios::latest()->get();*/

    $estudios = Estudios::latest()->paginate(2);
  
      return view('estudios.index')->with(['estudios' => $estudios]);
    }
  /*  public function aprobados(){

  }*/
    public function show(Estudios $estudio){
    //  $estudios = Estudios::find($estudioId);
      return view('estudios.show')->with(['estudio' => $estudio]);
    }
    public function create(){
      $estudio = new Estudios;
      return view('estudios.create')->with(['estudio' => $estudio]);
    }
    public function store(CreateEstudioRequest $request){
      /*
      OPCCION 1  Registro de datos*/
      $estudio = new Estudios;
      $estudio->nservicio=$request->get('nservicio');
      $estudio->solicitud=$request->get('solicitud');
      $estudio->fecha=$request->get('fecha');
      $estudio->save();
      session()->flash('message', 'Registro Guardado');
      return redirect()->route('estudios_path');
      //Para el siguiente forma de registro todos los campos deben de estar bien definido en el modelo
      /*$estudios = Estudios::create($request->only('nservicio','solicitud','fecha'));
      return redirect()->route('estudios_path');
*/
    }
    public function edit(Estudios $estudio){
      return view('estudios.edit')->with(['estudio' => $estudio]);
    }
    public function update(Estudios $estudio, UpdateEstudioRequest $request){
      $estudio->update(
        $request->only('user_id', 'nservicio', 'solicitud', 'fecha')
      );
      return redirect()->route('estudio_path', ['estudio'=>$estudio->id]);
    }
    public function delete(Estudios $estudio){
      $estudio->delete();

      return redirect()->route('estudios_path');

    }
}
