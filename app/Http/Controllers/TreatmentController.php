<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Observation;
use App\Treatment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
{
    public function index()
    {
        //$appointments = Appointment::all();
        $treatments = Treatment::where('personalSanitario_id', Auth::user()->id)->get();

        return view('Tratamientos.index', ['treatments' => $treatments]);
    }

    public function indexPaciente()
    {
        $treatments = Treatment::where('paciente_id', Auth::user()->id)->get();
        return view('Tratamientos.indexPaciente', ['treatments' => $treatments]);
    }
    public function indexPersonal($id)
    {
        $treatments = Treatment::where('paciente_id',$id)->get();
        // $users = User::where('userType','paciente')->get();
        /* $observations = DB::table('observations')
             ->join('users', 'users.id', '=', 'observations.paciente_id')
             ->select('users.name', 'observations.*')
             ->where('users.id','=','observations.paciente_id')->get();*/

        return view('Pacientes.tratamientos',['treatments'=>$treatments]);

    }
    public function create()
    {
        $pacientes = User::where('userType', 'paciente')->get()->pluck('name', 'id');
        return view('Tratamientos/create', ['pacientes' => $pacientes]);
    }

    public function store(Request $request)
    {
        /*$this->validate($request, [
            'paciente_id' => 'required|date|after:now',
            'commonName' => ['required', 'string', 'max:255'],
            'ReproductiveTreatmentType' => ['required', 'string', 'max:255'],
        ]);*/
        $treatment = new Treatment($request->all());
        $treatment->personalSanitario_id = Auth::user()->id;
        $treatment->save();


        flash('Tratamiento creada correctamente');

        return redirect()->route('tratamientos.index');
    }

    public function edit($id)
    {

        $treatments = Treatment::find($id);


        return view('Tratamientos/edit', ['treatments' => $treatments]);
    }

    public function update(Request $request, $id)
    {/*
        $this->validate($request, [
            'paciente_id' => 'required|date|after:now',
            'commonName' => ['required', 'string', 'max:255'],
            'ReproductiveTreatmentType' => ['required', 'string', 'max:255'],

        ]);*/
        $treatment = Treatment::find($id);
        $treatment->fill($request->all());

        $treatment->save();

        flash('Tratamiento modificado correctamente');

        return redirect()->route('tratamientos.index');
    }

    public function destroy($id)
    {
        $treatments = Treatment::find($id);
        $treatments->delete();
        flash('Tratamiento borrado correctamente');

        return redirect()->route('tratamientos.index');
    }

    public function show($id)
    {
        $treatments = Treatment::find($id);


        return view('Tratamientos.show', ['treatments' => $treatments]);
    }
}
