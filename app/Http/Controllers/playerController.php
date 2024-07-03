<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class playerController extends Controller
{
    public function fatchplayer(){
        $player=DB::table('players')
        ->Paginate(5);
        return view('welcome',['users'=> $player]);
    }
    
    public function addplayer(Request $req){
        $req->validate(
            [   'name' => 'required',
                'age'=>'required|numeric',
                'role'=>'required',
                'runs'=>'required|numeric',
                'wickets'=>'required|numeric',
                'country'=>'required',
            ],
        );
        $player=DB::table('players')
        ->insert([
            'name' => $req->name,
            'age' => $req->age,
            'role'=>$req->role,
            'runs'=>$req->runs,
            'wickets'=>$req->wickets,
            'country'=>$req->country
        ]);
        return redirect('/');
    }

    public function viewplayer(string $id){
        $player = DB::table('players')
        ->where('id',$id)
        ->get();
        return view('viewplayer',['datas'=>$player]);
    }

    public function deleteplayer(string $id){
        $player = DB::table('players')
        ->where('id',$id)
        ->delete();
        return redirect('/');
    }
    public function updateplayerpage($id){
        $player = DB::table('players')
        ->where('id',$id)
        ->get();

        return view('playerupdate',['data'=>$player]);
    }
    public function updateplayer($id ,Request $req){
        $player = DB::table('players')
        ->where('id',$id)
        ->update([
            'name' => $req->name,
            'age' =>  $req->age,
            'role'=> $req->role,
            'runs'=> $req->runs,
            'wickets'=> $req->wickets,
            'country'=> $req->country
        ]);
        return redirect('/');
    }
   
}
