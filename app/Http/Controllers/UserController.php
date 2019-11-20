<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function autentica(Request $dados){
        $email = $dados->email;
        $senha = $dados->senha;

        $user = DB::table('users')->where('email', $email)->first();
        $likes = DB::table('curtidas')->where('curtida', 'curtir')->count();
        $naolikes = DB::table('curtidas')->where('curtida', 'nao curtir')->count();

        if($user->password==$senha){
            return view('likes',[
              'user'=>$user,
              'likes'=>$likes,
              'naolikes'=>$naolikes
            ]);
        }
        else{
            return view('home');
        }
    }
    public function curtir(Request $dados){
        $user = $dados['user'];
        $curtida = $dados['curtir'];
        $cadastra = DB::table('curtidas')->insert(['curtida' => $curtida, 'usuario' => $user]);
        return view('home');
    }
}
