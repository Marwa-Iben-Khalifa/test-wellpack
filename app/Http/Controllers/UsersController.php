<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
class UsersController extends Controller
{
    //fonction store: recupère les différents champs renseignés (nom, prenom et content) et les enregistre dans la BDD
    // si pas de problème ==> redirect 127.0.0.1:8000/utilisateurs pour afficher tous les users
    function store(Request $req){
    
        $utilisateur= new Utilisateur;
        $utilisateur->nom=$req->nom;
        $utilisateur->prenom=$req->prenom;
        $utilisateur->content=$req->content;
        $utilisateur->save();
        return redirect('/utilisateurs');
    }

    // le fonction index recupère toutes les lignes dans la BDD et retourne les resultats à la partie views pour les afficher
    function index(){
        $utilisateurs = Utilisateur::all();
        return view('utilisateurs', [
            'utilisateurs' => $utilisateurs
        ]);
    }
};
