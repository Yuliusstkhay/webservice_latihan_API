<?php
namespace App\Http\Controllers;

use App\Models\Pasangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class PasanganController extends Controller{
    function __construct()
    {
        Config::set('app.timezone','Asia/Jakarta');
        // Config::set('mysql.timezone','+ 07:00');
        config(['database.connections.mysql.timezone'=>'+07:00']);
    }
    function index(){
        $pasangan=new Pasangan();
        return $pasangan->pasangan_romantis();
        // return 'halo';
    }
    function store(Request $request){
        // Pasangan::create($request->all());
        // $pasangan=new Pasangan();
        // $pasangan->create($request->all());
        // print_r($request->all());
        // return Pasangan::all();
        return $request;
        // DB::rollBack();
        // print_r(Config::get('database.connections.mysql.timezone'));
    }
    function update(Request $request){
        return $request;
    }
}