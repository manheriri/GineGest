<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Treatment;
use App\User;
use Illuminate\Http\Request;
use Auth;

class TreatmentController extends Controller
{
    public function index()
    {
        //$appointments = Appointment::all();
        $treatments = Treatment::where('paciente_id',Auth::user()->id)->get();

        return view('Tratamientos.index',['treatments'=>$treatments]);
    }
    public function create()
    {
        // $appointments = Appointment::all();
        return view('Tratamientos.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'paciente_id' => 'required|date|after:now',
            'commonName' => ['required', 'string', 'max:255'],
            'ReproductiveTreatmentType' => ['required', 'string', 'max:255'],
        ]);
        $paciente_id = Auth::user()->id;

        $treatment = new Appointment($request->all());
        $treatment->paciente_id = $paciente_id;

        $treatment->save();


        flash('Tratamiento creado correctamente');

        return redirect()->route('tratamientos.index');
    }
    public function edit($id)
    {

        $treatments = Treatment::find($id);


        $users = User::all()->pluck('paciente_id','id');


        return view('Tratamientos/edit',['paciente_id'=> $treatments, 'commonName'=>$treatments, 'ReproductiveTreatmentType'=>$treatments]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'paciente_id' => 'required|date|after:now',
            'commonName' => ['required', 'string', 'max:255'],
            'ReproductiveTreatmentType' => ['required', 'string', 'max:255'],

        ]);
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
}
