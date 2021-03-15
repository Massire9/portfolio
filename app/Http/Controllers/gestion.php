<?php

namespace App\Http\Controllers;

use App\MyApp\monPdo;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Mail\Contact;
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

    ///
    ///Scolarite
    ///

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

    public function supprimerFormation(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();

        $id = $request['id'];
        $monPdo->suppFormation($id);

        return redirect(route('chemin_editerCV'));
    }

    ///
    ///Competence
    ///

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

    public function supprimerCompetence(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();

        $id = $request['id'];
        $monPdo->suppCompetence($id);

        return redirect(route('chemin_editerCV'));
    }

    ///
    ///Experience
    ///

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

    public function supprimerExperience(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();

        $id = $request['id'];
        $monPdo->suppExperience($id);

        return redirect(route('chemin_editerCV'));
    }
    ///
    ///Projet
    ///
    public function afficherEditerProjet()
    {
        $monPdo = new monPdo();
        $lesProjets = $monPdo->getLesProjets();

        return view('editerProjets')
            ->with('lesProjets', $lesProjets);
    }

    public function afficherMajProjet(Request $request)
    {
        $request = $request->all();
        $id = $request['id'];

        $monPdo = new monPdo();
        $leProjet = $monPdo->getLeProjet($id);

        return view('majProjet')
            ->with('leProjet', $leProjet);
    }
    public function afficherAjtProjet()
    {
        return view('ajouterProjet');
    }

    public function validerAjtProjet(Request $request)
    {
        $request = $request->all();
        $monPdo = new monPdo();
        $imgs = $request['images'];
        $nom = $request['nom'];
        $desc = $request['description'];
        //$ordre = $request['ordre'];

        $monPdo->ajtProjet($nom, addslashes($desc), $imgs);
        return back();
    }

    public function validerContact(Request $request)
    {
        $request = $request->all();
        $mail = new Contact($request);

        Mail::to('mtoure@condorcet93.fr')
            ->send($mail);

        $erreurs = null;
        $messages[] = "Votre message a bien été envoyé";

        return view('contact')
            ->with('erreurs', $erreurs)
            ->with('messages', $messages);
    }

}
