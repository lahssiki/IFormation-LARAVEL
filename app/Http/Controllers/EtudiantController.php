<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Gate;

class EtudiantController extends Controller
{
    public function etudiant(){
        return view("etu.userHome");
    }

    public function inscription()
    {
        return view("etu.inscription");
    }
    
    public function store(EtudiantRequest $request){

        $formFields = $request->Validated();

        $number_inscription = mt_rand(1000000 , 9999999);
        $formFields = $request->all();
        $formFields['number_inscription'] = $number_inscription;
        $this->uploadImage($request,$formFields);
        Etudiant::create($formFields);

        
        return redirect()->route("etu.userHome")->with("success","LA9AD TASSAJALTOM BI NAJA7");
    }
    private function uploadImage(EtudiantRequest $request,array &$formFields){
        unset($formFields['bac_image']);
        if($request->hasFile('bac_image')){
            $formFields['bac_image'] = $request->file('bac_image')->store('etudiant','public');
        }
    }
}
