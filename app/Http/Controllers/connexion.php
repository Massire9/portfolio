<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyApp\monPdo;

class connexion extends Controller
{
    public function afficherConnexion()
    {
        $erreurs = null;
        return view('connexion')
                ->with('erreurs',$erreurs);
    }

    public function validerConnexion(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $login = $request['login'];
        $mdp = $request['mdp'];
        $infoMembre = $monPdo->getUnMembre($login, $mdp);

        if(is_array($infoMembre))
        {
            session(['membre' => $infoMembre]);
            switch($infoMembre['role'])
            {
                case '0':
                    $view = redirect(route('chemin_sio'));
                    break;
                case '1':
                    $view = redirect(route('chemin_editerCV'));
                    break;
            }
        }
        else
        {
            $erreurs = ["L'identifiant ou le mot de passe entré n'existent pas"];
            $view = view('connexion')
                    ->with('erreurs', $erreurs);
        }
        return $view;
    }
    public function afficherInscrip()
    {
        $erreurs = null;
        return view('inscription')
                ->with('erreurs', $erreurs);
    }

    public function validerInscription(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $lesMembres = $monPdo->getLesMembre();

        $nom = $request['nom'];
        $prenom = $request['prenom'];
        $email = $request['email'];
        $login = $request['login'];
        $mdp = $request['mdp'];
        $tel = $request['tel'];

        $existMail = false;
        $existLogin = false;
        foreach($lesMembres as $unMembre)
        {
            if($email == $unMembre['mail'])
            {
                $existMail = true;

            }

            if($login == $unMembre['login'])
            {
                $existLogin = true;
            }
        }


        if($existLogin == true|| $existMail == true)
        {
            if($existLogin){ $erreurs[] = "Un compte existe déja avec ce login"; }
            if($existMail){ $erreurs[] = "Un mail existe déja avec cet adresse mail"; }
            $view = view('inscription')
                ->with('erreurs', $erreurs);
        }
        else
        {
            $monPdo->inscription($nom, $prenom, $email, $login, $mdp, $tel);
            $erreurs = null;
            $view = view('connexion')
                ->with('erreurs',$erreurs);
        }
        return $view;
    }

    public function deconnexion()
    {
        session(['membre' => null]);
        $erreurs = null;
        return redirect(route('chemin_connexion'));
    }
}
