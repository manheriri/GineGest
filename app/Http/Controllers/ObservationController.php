<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Observation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ObservationController extends Controller
{

    public function index()
    {
       // $observations = DB::table('observations')
           // ->join('users', 'users.id', '=', 'observations.paciente_id')->get();
        $observations = Observation::all();
        /*$observations = DB::table('observations')
            ->join('users', 'users.name', '=', 'observations.paciente_id')
            ->select('users.id', 'observations.*')
            ->where('users.id','=','')
            ->get();*/

       // $observations = Observation::where('paciente_id',Auth::user()->id)->get();
        return view('Observaciones.index',['observations'=>$observations]);
    }
    public function indexPaciente()
    {
       //$observations = Observation::all();
        $observations = Observation::where('paciente_id',Auth::user()->id)->get();
        return view('Observaciones.indexPaciente',['observations'=>$observations]);
    }
    public function indexPersonal($id)
    {

        $observations = Observation::where('paciente_id',$id)->get();
       // $users = User::where('userType','paciente')->get();
       /* $observations = DB::table('observations')
            ->join('users', 'users.id', '=', 'observations.paciente_id')
            ->select('users.name', 'observations.*')
            ->where('users.id','=','observations.paciente_id')->get();*/

        return view('Pacientes.observaciones',['observations'=>$observations]);

    }
    public function show($id)
    {
        $observations = Observation::find($id);


        return view('Observaciones.show',['observations'=>$observations]);
    }
    public function create()
    {
        $pacientes = User::where('userType','paciente')->get()->pluck('name','id');
        return view('Observaciones/create',['pacientes'=>$pacientes]);
    }
    public function store(Request $request)
    {
        $observation = new Observation($request->all());
        $observation->personalSanitario_id=Auth::user()->id;
        $observation->save();


        flash('Observación creada correctamente');

        return redirect()->route('pacientes');
    }

    public function destroy($id)
    {
        $observations = Observation::find($id);
        $observations->delete();
        flash('Observación borrada correctamente');

        return redirect()->route('pacientes');
    }

    public function edit($id)
    {

        $observation = Observation::find($id);


        $users = User::all()->pluck('full_name','id');


        return view('Observaciones/edit',['observation'=> $observation, 'medico_id'=>$observation, 'paciente_id'=>$observation]);
    }

    public function update(Request $request, $id)
    {
      /*  $this->validate($request, [
            'motherWeigth' => 'required|date|after:now',
            'fetalWeigth' => 'required'

        ]);*/
        $observation = Observation::find($id);
        $observation->fill($request->all());

        $observation->save();

        flash('Observación modificada correctamente');

        return redirect()->route('pacientes');
    }
}
