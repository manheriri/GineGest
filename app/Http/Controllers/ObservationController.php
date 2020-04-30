<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use Illuminate\Http\Request;
use App\Observation;
use Auth;
class ObservationController extends Controller
{

    public function index()
    {
        // $observations = Observation::all();
        $observations = Observation::where('personalSanitario_id',Auth::user()->id)->get();
        return view('Observaciones.index',['observations'=>$observations]);
    }
    public function indexPersonalSanitario()
    {
       $observations = Observation::all();
        //$observations = Observation::where('paciente_id',Auth::user()->id)->get();
        return view('Observaciones.indexPersonalSanitario',['observations'=>$observations]);
    }
    public function show($id)
    {
        $observations = Observation::find($id);

        return view('Observaciones.index',['observations'=>$observations]);
    }
    public function create()
    {
        // $appointments = Appointment::all();
        return view('Observaciones/create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'motherWeigth' => 'required|date|after:now',
            'fetalWeigth' => ['required', 'string', 'max:255'],

        ]);
        $paciente_id = User::all();

        $observation = new Observation($request->all());
        $observation->paciente_id = $paciente_id;

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


        return view('Observaciones/edit',['cita'=> $observation, 'medico_id'=>$observation, 'paciente_id'=>$observation]);
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
