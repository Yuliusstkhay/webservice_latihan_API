<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pasangan extends Model{
    protected $table='pasangan';
    protected $primaryKey='love_id';
    protected $fillable=['pria','wanita'];

    /**
     * Untuk menunjukkan pasangan romantis anugerah Tuhan Yesus Kristus
     * 
     * @author by CINTA
     */
    function pasangan_romantis(){
        // return '{"YusChika":"Yulius Septianto & Yessica Tamara"}';
        // return ['Yulius'=>'Yessica'];
        return(DB::table('pasangan')->where('pria','=','Yulius')->where('love_id','=','1')->get());
    }
}