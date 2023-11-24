<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    function index()
    {
        if (Gate::allows("admin")) {
            return view("admin.dashboard");
        } else
            return redirect()->route("etu.userHome");
    }

    function informatique()
    {
        if (Gate::allows("admin")) {
            return view("admin.informatique");
        } else {
            return redirect()->route("etu.userHome");
        }
    }

    public function infographie()
    {
        if (Gate::allows("admin")) {
            return view("admin.infographie");
        } else {
            return redirect()->route("etu.userHome");
        }
    }
    public function gestion()
    {
        if (Gate::allows("admin")) {
            return view("admin.gestion");
        } else {
            return redirect()->route("etu.userHome");
        }
    }
    public function inscription()
    {
        return view("etu.inscription");
    }
}
