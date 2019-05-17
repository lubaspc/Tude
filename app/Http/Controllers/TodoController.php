<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\padre;
use App\maestro;
use App\grupos;
use App\alumno;

class TodoController extends Controller
{
    private $x;

    public function login(Request $r)
    {

        if($r->user=='admin' && $r->pass=='admin'){
            $this->x=1;
            return redirect('/Tude/'.$this->x);
        }else{
            return redirect('/');
        }



    }

    public function Tude($id)
    {
        return view('inicio');
    }

    public function newPadre() {
        return view('newPadre');
    }

    public function newAlumno(){
        $padre=padre::all();
        $grupo=grupos::join('maestros','grupos.id_maestros','maestros.id')->get();
        return view('newAlumno',compact('padre','grupo'));

    }
    public function newProfesor(){
        return view('newProfesor');

    }

    public function newGrupo(){
        $prof= maestro::all();
        return view('newGrupo',compact('prof'));

    }

    public function storeAlumno(Request $r){
        $alumno = new alumno();
        $alumno->id_padres=$r->padre;
        $alumno->nombre=$r->nombre;
        $alumno->ap_pat=$r->AP;
        $alumno->ap_mat=$r->AM;
        $alumno->id_grupo=$r->grupo;
        $alumno->save();
        return redirect('/Tude/'.$this->x);


    }
    public function storePadre(Request $r){
        $padre = new padre();
        if($r->hasFile('foto')){
            $hora=date("h:i:s");
            $fecha=date("d-m-Y");
            $prefijo=$fecha."_".$hora."_";
            $file = $r->file('foto');
            $name=$prefijo.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $padre->foto=$name;
        }
        $padre->nombre=$r->nombre;
        $padre->ap_Pat=$r->AP;
        $padre->ap_Mat=$r->AM;
        $padre->edad=$r->edad;
        $padre->parentesco=$r->parentesco;
        $padre->sexo=$r->sexo;
        $padre->ine=$r->ine;

        $padre->username=$r->user;
        $padre->password=$r->pass;
        $padre->save();
        return redirect('/Tude/'.$this->x);

    }
    public function storeGrupo(Request $r){
        $grupos = new grupos();
        $grupos->id_maestros=$r->profe;
        $grupos->grado=$r->grado;
        $grupos->grupo=$r->grupo;
        $grupos->save();
        return redirect('/Tude/'.$this->x);

    }
    public function storeProfesor(Request $r){
        $padre = new maestro();
        if($r->hasFile('foto')){
            $hora=date("h:i:s");
            $fecha=date("d-m-Y");
            $prefijo=$fecha."_".$hora."_";
            $file = $r->file('foto');
            $name=$prefijo.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $padre->foto=$name;
        }
        $padre->nombre=$r->nombre;
        $padre->ap_pat=$r->AP;
        $padre->ap_mat=$r->AM;
        $padre->edad=$r->edad;
        $padre->sexo=$r->sexo;
        $padre->ine=$r->ine;
        $padre->username=$r->user;
        $padre->password=$r->pass;
        $padre->save();
        return redirect('/Tude/'.$this->x);

    }


}
