<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// Obligatoire pour avoir accès au modèle
use App\Models\Membre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // des variables
    protected $les_users;
    protected $soumissions;

    public function __construct( User $users, Request $requetes) {
        $this->les_users = $users;
        $this->soumissions = $requetes;
    }

    public function index() {
        $les_users = $this->les_users->all();
        return view('pages_site/admin', compact('les_users'));
    }

    public function approuveadmin($id){
        $un_user = $this->les_users->find($id);
        if($un_user->isAdmin== 0){
            $un_user->isAdmin = 1;  
        }
        else
        {
            $un_user->isAdmin = 0; 
        }
        $un_user->save();
        return redirect()->route('admin');
    }

    public function verify($id) {
        $un_user = $this->les_users->find($id);
        if($un_user->isVerified== 0){
            $un_user->isVerified = 1;  
        }
        else
        {
            $un_user->isVerified = 0; 
        }
        $un_user->save();
        return redirect()->route('admin');
    }

    public function delete($id) {
        $un_user = User::findOrFail($id);;
        $un_user->delete();
        return redirect()->route('admin');
    }
}