<?php

namespace App\Http\Controllers;

use App\Treatment;
use App\Observation;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = DB::table('users')->get();
        $users = User::where('userType','paciente')->get();
        $observations = DB::table('observations')
            ->join('users', 'users.id', '=', 'observations.paciente_id')
            ->select('observations.id')->get();
        $treatments=Treatment::all();
        $title = 'Listado de pacientes';

//        return view('users.index')
//            ->with('users', User::all())
//            ->with('title', 'Listado de usuarios');

        return view('Pacientes.index', compact('title', 'users','observations','treatments'));
    }
    public function show($id)
    {
        $observations = Observation::find($id);


        return view('Observaciones.show',['observations'=>$observations]);
    }
    public function showmedtrat($id)
    {
        $treatments = Treatment::find($id);

        return view('Pacientes.showMedicacion',['treatments'=>$treatments]);
    }
    public function observaciones()
    {
        $observations = DB::table('observations')
            ->join('users', 'users.id', '=', 'observations.paciente_id')
            ->select('observations.id')->get();


        return view('Pacientes.observaciones',['observations'=>$observations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
