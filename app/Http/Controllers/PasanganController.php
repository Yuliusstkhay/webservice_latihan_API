<?php
namespace App\Http\Controllers;

use App\Models\Pasangan;
use Illuminate\Http\Request;

class PasanganController extends Controller{
    function index(){
        $pasangan=new Pasangan();
        return $pasangan->pasangan_romantis();
        // return 'halo';
    }
    function store(Request $request){
        return $request;
    }
}