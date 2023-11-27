<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        if (Gate::allows("admin")) {
            $etudiants = Etudiant::all();
            return view("admin.dashboard", ["etudiants"=> $etudiants]);
        } else
            return redirect()->route("etu.userHome");
    }

    public function informatique(Request $etudiants)
    {
        if (Gate::allows("admin")) {
            //$etudiants = Etudiant::
            $etudiants = DB::table('etudiants')->where('specialite', 'informatique')->get();
            //dd($etudiants);
            return view("admin.informatique", ["etudiants"=> $etudiants]);
        } else {
            return redirect()->route("etu.userHome");
        }
    }
    
    public function infographie()
    {
        if (Gate::allows("admin")) {
            $etudiants = DB::table('etudiants')->where('specialite', 'infographie')->get();
            //$etudiants = Etudiant::where('specialite', 'infographie');
            return view("admin.infographie", ["etudiants"=> $etudiants]);
        } else {
            return redirect()->route("etu.userHome");
        }
    }
    public function gestion()
    {
        if (Gate::allows("admin")) {
            $etudiants = DB::table('etudiants')->where('specialite', 'gestion')->get();
            //$etudiants = Etudiant::where('specialite','gestion');
            return view("admin.gestion", ["etudiants"=> $etudiants]);
        } else {
            return redirect()->route("etu.userHome");
        }
    }
    public function bacImage($id){
        if (Gate::allows("admin")) {
        $etudiants = Etudiant::findOrFail($id);
        return view("admin.bac-show")->with("etudiants", $etudiants);
        }
    }

}
