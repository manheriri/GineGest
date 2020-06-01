<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Observation;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class CitasController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //$appointments = Appointment::all();
        $appointments = Appointment::where('paciente_id',Auth::user()->id)->get();

        return view('Citas.index',['appointments'=>$appointments]);
    }
    public function indexPersonalSanitario()
    {
        $appointments = Appointment::where('personalSanitario_id',Auth::user()->id)->get();
        return view('Citas.indexPersonalSanitario',['appointments'=>$appointments]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personalSanitario = User::where('userType','personalSanitario')->get()->pluck('name','id');
        return view('Citas/create',['personalSanitario'=>$personalSanitario]);
    }
    public function createPersonalSanitario()
    {
        $paciente = User::where('userType', 'paciente')->get()->pluck('name', 'id');
        return view('Citas/createPersonalSanitario', ['paciente' => $paciente]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $paciente_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/*
        $this->validate($request, [
            'fechaCita' => ['required|date|after:now'],
            'medicoName' => ['required', 'string', 'max:255'],
            'reason' => ['required', 'string', 'max:255'],
        ]);*/
        //$paciente_id = Auth::user()->id;

        $appointments = new Appointment($request->all());
        $appointments->paciente_id =Auth::user()->id;
        $appointments->save();


        flash('Cita creada correctamente');

        return redirect()->route('citas.index');
    }
    public function storePersonal(Request $request)
    {

        $appointments = new Appointment($request->all());
        $appointments->personalSanitario_id =Auth::user()->id;
        $appointments->save();


        flash('Cita creada correctamente');

        return redirect()->route('citasPersonal');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $appointments = Appointment::find($id);
        return view('Citas/edit',[ 'appointments'=>$appointments]);
    }
    public function editPersonal($id)
    {

        $appointments = Appointment::find($id);
        return view('Citas/editPersonal',[ 'appointments'=>$appointments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $appointments = Appointment::find($id);
        $appointments->fill($request->all());

        $appointments->save();

        flash('Cita modificada correctamente');

        return redirect()->route('citas.index');
    }
    public function updatePersonal(Request $request, $id)
    {

        $appointments = Appointment::find($id);
        $appointments->fill($request->all());

        $appointments->save();

        flash('Cita modificada correctamente');

        return redirect()->route('citasPersonal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $appointments = Appointment::find($id);
    $appointments->delete();
    flash('Cita borrada correctamente');

    return redirect()->route('eliminarCita');
}
    public function destroyPersonal($id)
    {
        $appointments = Appointment::find($id);
        $appointments->delete();
        flash('Cita borrada correctamente');

        return redirect()->route('citasPersonal');
    }
}
