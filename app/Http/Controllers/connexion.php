<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyApp\monPdo;
use OAuthProvider;
use Illuminate\Support\Str;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

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
        if($request['login'] == "" || $request['mdp'] == "")
        {
            if($request['login'] == ""){ $erreurs [] = "Veuillez entrer votre login."; }
            if($request['mdp'] == ""){ $erreurs[] = "Veuillez entrer un mot de passe";}
            return view('connexion')
                ->with('erreurs', $erreurs);
        }

        $monPdo = new monPdo();
        $login = htmlentities($request['login']);
        $mdp = htmlentities($request['mdp']);


        $lesMembres = $monPdo->getLesMembre();

        $infoMembre = null;
        foreach($lesMembres as $unMembre)
        {
            if(password_verify($mdp, $unMembre['mdp']) && $login == $unMembre['login'])
            {
                $infoMembre = $unMembre;
            }
        }

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
            $erreurs[] = "L'identifiant ou le mot de passe entrés n'existent pas";
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

        $nom = htmlentities($request['nom']);
        $prenom = htmlentities($request['prenom']);
        $email = htmlentities($request['email']);
        $login = htmlentities($request['login']);
        $mdp = htmlentities($request['mdp']);
        $tel = htmlentities($request['tel']);

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
            $monPdo->inscription($nom, $prenom, $email, $login, password_hash($mdp, PASSWORD_DEFAULT), $tel);
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

    public function mdpOublie(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        if ($request['mail'] == "") {
            $erreurs[] = "Veuillez entrer une adresse mail";
            return view('connexion')
                ->with('erreurs', $erreurs);
        }

        $lesMembres = $monPdo->getLesMembre();
        $flag = false;

        foreach($lesMembres as $unMembre)
        {
            if($unMembre['mail'] == $request['mail'])
            {
                $flag = true;
            }
        }

        if($flag)
        {
            $token = Str::random(10);
            $c = array("mail" => $request['mail'], "token" => $token, "use" => "mdp");



            $monPdo->nvMdp($request['mail'], addslashes(password_hash($token, PASSWORD_DEFAULT)));
            $contact = new Contact($c);
            Mail::to($request['mail'])
                ->send($contact);

            $erreurs = null;
            $messages[] = "Votre mot de passe a bien été modifié, vous allez recevoir un mail.";
            return back()->with('message', $messages)
                        ->with('erreurs', $erreurs);
        }
        else
        {
            $erreurs[] = "Il n'y a aucune adresse mail qui correspond";
            return back()->with('erreurs', $erreurs);
        }

    }
}
