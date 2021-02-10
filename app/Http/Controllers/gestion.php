<?php

namespace App\Http\Controllers;

use App\MyApp\monPdo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class gestion extends Controller
{
    public function afficherEditerCV()
    {
        $monPdo = new monPdo();
        $lesExperiences = $monPdo->getLesExperiences();
        $lesCompetences = $monPdo->getLesCompetences();
        $lesFormations =  $monPdo->getLaScolarite();

        return view('editerCV')
            ->with('lesFormations', $lesFormations )
            ->with('lesCompetences', $lesCompetences)
            ->with('lesExperiences', $lesExperiences);
    }

    public function afficherMajScolarite(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $id = $request['id'];

        $uneFormation = $monPdo->getUneFormation($id);
        return view('majScolarite')
            ->with('uneFormation', $uneFormation);
    }

    public function validerMajScolarite(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $id = $request['id'];
        $diplome = $request['diplome'];
        $filiere = $request['filiere'];
        $annee = $request['annee'];
        $ordre = $request['ordre'];
        $ville = $request['ville'];
        $monPdo->majScolarite($id, $diplome, $ville, $filiere, $annee, $ordre);
        return redirect(route('chemin_editerCV'));
    }
    public function afficherAjtScolarite()
    {
        return view('ajouterScolarite');
    }

    public function validerAjtScolarite(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();

        $diplome = $request['diplome'];
        $filiere = $request['filiere'];
        $annee = $request['annee'];
        $ordre = $request['ordre'];
        $ville = $request['ville'];
        $monPdo->ajtScolarite($diplome, $filiere, $annee, $ordre, $ville);
        return redirect(route('chemin_editerCV'));
    }

    public function afficherMajCompetence(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $id = $request['id'];

        $uneCompetence = $monPdo->getUneCompetence($id);
        return view('majCompetence')
            ->with('uneCompetence', $uneCompetence);
    }
    public function afficherAjtCompetence()
    {
        return view('ajouterCompetence');
    }

    public function validerMajCompetence(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $id = $request['id'];
        $nom = $request['nom'];
        $description = $request['description'];
        $ordre = $request['ordre'];

        $monPdo->majCompetence($id, $nom, $description, $ordre);
        return redirect(route('chemin_editerCV'));
    }

    public function validerAjtCompetence(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $nom = $request['nom'];
        $description = $request['description'];
        $ordre = $request['ordre'];

        $monPdo->ajtCompetence($nom, $description, $ordre);
        return redirect(route('chemin_editerCV'));
    }



    public function afficherMajExperience(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $id = $request['id'];

        $uneExperience = $monPdo->getUneExperience($id);
        return view('majExperience')
            ->with('uneExperience', $uneExperience);
    }

    public function validerMajExperience(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $id = $request['id'];
        $nom = $request['nom'];
        $date = $request['date'];
        $description = $request['description'];
        $ordre = $request['ordre'];

        $monPdo->majExperience($id, $nom, $date, $description, $ordre);
        return redirect(route('chemin_editerCV'));
    }

    public function afficherAjtExperience()
    {
        return view('ajouterExperience');
    }

    public function validerAjtExperience(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $nom = $request['nom'];
        $date = $request['date'];
        $description = $request['description'];
        $ordre = $request['ordre'];

        $monPdo->ajtExperience(addslashes($nom), addslashes($description), $date, $ordre);
        return redirect(route('chemin_editerCV'));
    }
}
