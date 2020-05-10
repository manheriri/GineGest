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
        $paciente = User::where('userType','paciente')->get()->pluck('name','id');
        return view('Citas/createPersonalSanitario',['paciente'=>$paciente]);
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

        $appointment = new Appointment($request->all());
        $appointment->paciente_id =Auth::user()->id;
        $appointment->save();


        flash('Cita creada correctamente');

        return redirect()->route('citas.index');
    }
    public function storePersonal(Request $request)
    {/*
        $this->validate($request, [
            'fechaCita' => ['required|date|after:now'],
            'medicoName' => ['required', 'string', 'max:255'],
            'reason' => ['required', 'string', 'max:255'],
        ]);*/
        //$paciente_id = Auth::user()->id;

        $appointment = new Appointment($request->all());
        $appointment->personalSanitario_id =Auth::user()->id;
        $appointment->save();


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


        $users = User::all()->pluck('full_name','id');


        return view('Citas/edit',[ 'users'=>$users]);
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
        $this->validate($request, [
            'fechaCita' => 'required|date|after:now',
            'reason' => 'required'

        ]);
        $appointment = Appointment::find($id);
        $appointment->fill($request->all());

        $appointment->save();

        flash('Cita modificada correctamente');

        return redirect()->route('citas.index');
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

    return redirect()->route('citasPersonal');
}
}
