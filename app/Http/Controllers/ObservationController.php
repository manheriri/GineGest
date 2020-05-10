<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Observation;
use Illuminate\Support\Facades\Auth;

class ObservationController extends Controller
{

    public function index()
    {
        $observations = Observation::all();
       // $observations = Observation::where('paciente_id',Auth::user()->id)->get();
        return view('Observaciones.index',['observations'=>$observations]);
    }
    public function indexPaciente()
    {
       //$observations = Observation::all();
        $observations = Observation::where('paciente_id',Auth::user()->id)->get();
        return view('Observaciones.indexPaciente',['observations'=>$observations]);
    }
    public function show($id)
    {
        $observations = Observation::find($id);


        return view('Observaciones.show',['observations'=>$observations,]);
    }
    public function create()
    {
        $pacientes = User::where('userType','paciente')->get()->pluck('name','id');
        return view('Observaciones/create',['pacientes'=>$pacientes]);
    }
    public function store(Request $request)
    {/*
       $this->validate($request, [
            'motherWeigth' => ['required', 'string', 'max:255'],
            'fetalWeigth' => ['required', 'string', 'max:255'],
            'gestationWeek' => ['required', 'string', 'max:255'],
            'fetalGender' => ['required', 'string', 'max:255'],
            'fundalHeigth' => ['required', 'string', 'max:255'],
            'streptococoAgalacitae' => ['required', 'string', 'max:255'],
            'allergy' => ['required', 'string', 'max:255'],
            'smoker' => ['required', 'boolean', 'max:255'],
            'drunker' => ['required', 'boolean', 'max:255'],
            'bloodType' => ['required', 'string', 'max:255'],
            'menarquia' => ['required', 'string', 'max:255'],
            'finalization' => ['required', 'string', 'max:255'],
            'background' => ['required', 'string', 'max:255'],
            'amniocentesis' => ['required', 'string', 'max:255'],

        ]);*/
        $observation = new Observation($request->all());
        $observation->personalSanitario_id=Auth::user()->id;
        $observation->save();


        flash('Observación creada correctamente');

        return redirect()->route('observaciones.index');
    }

    public function destroy($id)
    {
        $observations = Observation::find($id);
        $observations->delete();
        flash('Observación borrada correctamente');

        return redirect()->route('observaciones.index');
    }

    public function edit($id)
    {

        $observation = Observation::find($id);


        $users = User::all()->pluck('full_name','id');


        return view('Observaciones/edit',['observation'=> $observation, 'medico_id'=>$observation, 'paciente_id'=>$observation]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'motherWeigth' => 'required|date|after:now',
            'fetalWeigth' => 'required'

        ]);
        $observation = Observation::find($id);
        $observation->fill($request->all());

        $observation->save();

        flash('Observación modificada correctamente');

        return redirect()->route('observaciones.index');
    }
}
